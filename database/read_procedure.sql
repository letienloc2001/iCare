-- return all degrees of an doctor, given doctor_id
DROP PROCEDURE IF EXISTS getDegrees;
DELIMITER $$
create procedure getDegrees(IN DOCTOR_ID int)
begin
    select degree_type, degree_name, year
    from doctor_degree
    where doc_id = DOCTOR_ID;
end $$
DELIMITER ;

-- return all specializations of a doctor, given doctor_id
DROP PROCEDURE IF EXISTS getSpecializations;
DELIMITER $$
create procedure getSpecializations(IN DOCTOR_ID int)
begin
    select s.spec_id, spec_name, YOE
    from doctor_specification ds, specification s
    where ds.doc_id = DOCTOR_ID and ds.spec_id = s.spec_id;
end $$
DELIMITER ;

-- show a doctor's details, given doctor_id
DROP PROCEDURE IF EXISTS getPatientDetails;
DELIMITER $$
create procedure getPatientDetails(IN PATIENT_ID int)
begin
    select patient_id, patient_name, nic_number, age, house_number, street, ward, district, city, image_url
    from patient where patient_id = PATIENT_ID;
end $$
DELIMITER ;

-- show a doctor's details, given doctor_id
DROP PROCEDURE IF EXISTS getDoctorDetails;
DELIMITER $$
create procedure getDoctorDetails(IN DOCTOR_ID int)
begin
    select doc_id, doc_name, clinic_number, street, ward, district, city, image_url, description, star_reviews, phone_number
    from doctor where doc_id = DOCTOR_ID;
end $$
DELIMITER ;

-- return recent reviews of a doctor, given doctor_id
DROP PROCEDURE IF EXISTS getRecentReviews;
DELIMITER $$
create procedure getRecentReviews(IN DOCTOR_ID int)
begin
    select p.patient_id, patient_name, patient_star, patient_review, meeting_date, image_url
    from patient2doctor p2d, patient p
    where doc_id = DOCTOR_ID and p2d.patient_id = p.patient_id and p2d.request_status= 'a'
    order by meeting_date desc;
end $$
DELIMITER ;

-- return all approve appointments of a patient, given doctor_id
DROP PROCEDURE IF EXISTS getApprovedAppointments;
DELIMITER $$
create procedure getApprovedAppointments(IN DOCTOR_ID int)
begin
    select meeting_id, patient_name, p.patient_id, age, initial_condition, date_registered, meeting_date, p.image_url
    from patient2doctor as p2d, patient as p
    where p2d.doc_id = DOCTOR_ID and p2d.patient_id = p.patient_id and p2d.request_status = 'a';
end $$
DELIMITER ;

-- return all waiting appointments of a doctor, given doctor_id
DROP PROCEDURE IF EXISTS getWaitingAppointments;
DELIMITER $$
create procedure getWaitingAppointments(IN DOCTOR_ID int)
begin
    select meeting_id, patient_name,p.patient_id, age, initial_condition, date_registered, meeting_date, p.image_url
    from patient2doctor as p2d, patient as p
    where p2d.doc_id = DOCTOR_ID and p2d.patient_id = p.patient_id and p2d.request_status = 'w';
end $$
DELIMITER ;

-- return all approved appointments of a patient, given patient_id
DROP PROCEDURE IF EXISTS getApprovedAppointments_Patient;
DELIMITER $$
create procedure getApprovedAppointments_Patient(IN PATIENT_ID int)
begin
    select meeting_id, doc_name, clinic_number, street, ward, district, city, image_url, description, star_reviews, meeting_date
    from doctor as d, patient2doctor as p2d
    where p2d.patient_id = PATIENT_ID and p2d.request_status= 'a' and p2d.doc_id = d.doc_id;
end $$
DELIMITER ;

-- get all waiting appointments of a patient, given patient_id
DROP PROCEDURE IF EXISTS getWaitingAppointments_Patient;
DELIMITER $$
create procedure getWaitingAppointments_Patient(IN PATIENT_ID int)
begin
    select meeting_id, doc_name, clinic_number, street, ward, district, city, image_url, description, star_reviews, meeting_date
    from doctor as d, patient2doctor as p2d
    where p2d.patient_id = PATIENT_ID and p2d.request_status= 'w' and p2d.doc_id = d.doc_id;
end $$
DELIMITER ;

-- Return top 3 doctors given star_reviews
DROP PROCEDURE IF EXISTS getTop3Doctors;
DELIMITER $$
create procedure getTop3Doctors()
begin
    select doc_id, doc_name, clinic_number, street, ward, district, city, image_url, description, star_reviews
    from doctor
    order by star_reviews desc
    limit 3;
end $$
DELIMITER ;

-- check if email exist in db
DROP PROCEDURE IF EXISTS checkEmailExists;
DELIMITER $$
create procedure checkEmailExists(IN GIVEN_EMAIL varchar(50))
begin
    select *
    from user
    where email = GIVEN_EMAIL;
end $$
DELIMITER ;

-- After using this, check usertype and then use the corresponding ID to select into correspoint table
-- EG: usertype = 'd' -> Use doc_id to select into doctor table. This happens in PHP
DROP PROCEDURE IF EXISTS getLoginInfo;
DELIMITER $$
create procedure getLoginInfo(
    IN GIVEN_EMAIL varchar(50),
    IN GIVEN_PASSWORD varchar(50)
)
begin
    select email, user_type, doc_id, patient_id, admin_id
    from user
    where email = GIVEN_EMAIL and password = GIVEN_PASSWORD;
end $$
DELIMITER ;

-- return all doctors given a specialization
DROP PROCEDURE IF EXISTS getDoctorsBySpec;
DELIMITER $$
create procedure getDoctorsBySpec(IN GIVEN_SPEC_ID int)
begin
    select d.doc_id, doc_name, clinic_number, street, ward, district, city, image_url, description, star_reviews, phone_number
    from doctor as d, doctor_specification as ds
    where ds.spec_id = GIVEN_SPEC_ID and ds.doc_id = d.doc_id;
end $$
DELIMITER ;
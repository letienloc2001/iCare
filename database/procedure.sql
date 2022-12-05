-- procedure to return all degrees of an doctor, given doctor_id
DROP PROCEDURE IF EXISTS getDegrees;
DELIMITER $$
create procedure getDegrees(IN DOCTOR_ID int)
begin
    select degree_type, degree_name, year
    from doctor_degree
    where doc_id = DOCTOR_ID;
end $$
DELIMITER ;

-- test
call getDegrees(1);

-- procedure to return all specializations of a doctor, given doctor_id
DROP PROCEDURE IF EXISTS getSpecializations;
DELIMITER $$
create procedure getSpecializations(IN DOCTOR_ID int)
begin
    select s.spec_id, spec_name, YOE
    from doctor_specification ds, specification s
    where ds.doc_id = DOCTOR_ID and ds.spec_id = s.spec_id;
end $$
DELIMITER ;

-- test
call getSpecializations(1);

-- procedure to show doctor's details, given doctor_id
DROP PROCEDURE IF EXISTS getDoctorDetails;
DELIMITER $$
create procedure getDoctorDetails(IN DOCTOR_ID int)
begin
    select doc_id, doc_name, clinic_number, street, ward, district, city, image_url, description, star_reviews
    from doctor where doc_id = DOCTOR_ID;
end $$
DELIMITER ;

-- test
call getDoctorDetails(1);

-- show recent reviews of a doctor, given doctor_id
DROP PROCEDURE IF EXISTS getRecentReviews;
DELIMITER $$
create procedure getRecentReviews(IN DOCTOR_ID int)
begin
    select p.patient_id, patient_name patient_star, patient_review, meeting_date
    from patient2doctor p2d, patient p
    where doc_id = DOCTOR_ID and p2d.patient_id = p.patient_id
    order by meeting_date desc;
end $$
DELIMITER ;

call getRecentReviews(1);

-- show all waiting appointments of a doctor, given doctor_id
DROP PROCEDURE IF EXISTS getWaitingAppointments;
DELIMITER $$
create procedure getWaitingAppointments(IN DOCTOR_ID int)
begin
    select patient_name,p.patient_id, age, initial_condition, date_registered, meeting_date
    from patient2doctor as p2d, patient as p
    where p2d.doc_id = DOCTOR_ID and p2d.patient_id = p.patient_id and p2d.request_status= 'a';
end $$
DELIMITER ;

call getWaitingAppointments(1);

-- show all approved appointments of a doctor, given patient_id
DROP PROCEDURE IF EXISTS getConfirmedAppointments_Patient;
DELIMITER $$
create procedure getConfirmedAppointments_Patient(IN PATIENT_ID int)
begin
    select doc_name, clinic_number, street, ward, district, city, image_url, description, star_reviews, meeting_date
    from doctor as d, patient2doctor as p2d
    where p2d.patient_id = PATIENT_ID and p2d.request_status= 'a' and p2d.doc_id = d.doc_id;
end $$
DELIMITER ;

call getConfirmedAppointments_Patient(2);




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

-- show recent reviews of a doctor, given doctor_id
DROP PROCEDURE IF EXISTS getRecentReviews;
DELIMITER $$
create procedure getRecentReviews(IN DOCTOR_ID int)
begin
    select patient_id, patient_star, patient_review, meeting_date
    from patient2doctor
    where doc_id = DOCTOR_ID
    order by meeting_date desc
    limit 5;
end $$
DELIMITER ;

call getRecentReviews(1);

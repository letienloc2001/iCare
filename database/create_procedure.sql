-- Register a patient
drop procedure if exists register_patient;
delimiter $$
create procedure register_patient(
    in given_name varchar(50),
    in given_password varchar(50),
    in given_nic_number varchar(50),
    in given_age int,
    in given_email varchar(50),
    in given_district varchar(50),
    in given_city varchar(50)
)
begin
    insert into patient(patient_name, nic_number, age, district, city)
    values(given_name, given_nic_number, given_age, given_district, given_city);

    insert into user(email, password, user_type, patient_id)
    values(given_email, given_password, 'p', (select patient_id from patient where nic_number = given_nic_number));
end $$
delimiter ;

-- test (NHO DUNG EMAIL KHAC NHAU), nen truoc khi check register
-- phai CHECK XEM EMAIL CO TRONG BANG USER CHUA
-- SELECT * FROM user where email = $GIVEM_EMAIL (neu co thi bao loi)
call register_patient('John Doe', '123', '123456789VDS', 20, 'jdoe1@gmail.com', 'Colombo', 'Colombo');
call register_patient('John Doe 2', '123', 'new_nic', 20, 'new_email@gmail.com', 'Colombo', 'Colombo');
call register_patient('John Doe 3', '123', 'new_nic 2', 20, 'new_email_2@gmail.com', 'Colombo', 'Colombo');

-- Register an appointment
drop procedure if exists register_appointment;
delimiter $$
create procedure register_appointment(
    in given_patient_id int,
    in given_doctor_id int,
    in given_date date,
    in given_condition varchar(50)
)
begin
    insert into patient2doctor(patient_id, doc_id, date_registered, request_status, meeting_date, initial_condition)
    values(given_patient_id, given_doctor_id, now(), 'w', given_date, given_condition);
end $$
delimiter ;

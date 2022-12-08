-- Register a patient
drop procedure if exists register_patient;
delimiter $$
create procedure register_patient(
    in given_name varchar(50),
    in given_password varchar(50),
    in given_nic_number varchar(50),
    in given_email varchar(50),
)
begin
    insert into patient(patient_name, nic_number)
    values(given_name, given_nic_number);

    insert into user(email, password, user_type, patient_id)
    values(given_email, given_password, 'p', (select patient_id from patient where nic_number = given_nic_number));
end $$
delimiter ;

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

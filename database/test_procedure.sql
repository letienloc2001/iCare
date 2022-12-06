-- test query
call getDegrees(1);
call getSpecializations(1);
call getDoctorDetails(1);
call getRecentReviews(1);
call getWaitingAppointments(1);
call getApprovedAppointments_Patient(1);
call getTop3Doctors();

-- test update
call approveMeeting(33);
call denyMeeting(33);

-- test register new patient
call register_patient('John Doe', '123', '123456789VDS', 20, 'jdoe1@gmail.com', 'Colombo', 'Colombo');
call register_patient('John Doe 2', '123', 'new_nic', 20, 'new_email@gmail.com', 'Colombo', 'Colombo');
call register_patient('John Doe 3', '123', 'new_nic 2', 20, 'new_email_2@gmail.com', 'Colombo', 'Colombo');

-- test patient register new appointment
call register_appointment(16, 4, '2020-12-12', 'fever');
call register_appointment(16, 5, '2020-12-24', 'more fever');
call register_appointment(16, 8, '2020-12-25', 'even more fever');

call getWaitingAppointments_Patient(16);
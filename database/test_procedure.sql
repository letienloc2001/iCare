-- test query
call getDegrees(1);
call getSpecializations(1);
call getDoctorDetails(1);
call getRecentReviews(1);
call getAllAppointments(1);
call getConfirmedAppointments_Patient(2);

-- test update
call approveMeeting(4);
call denyMeeting(4);
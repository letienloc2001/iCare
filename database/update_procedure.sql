-- update appointment status to "confirmed", given patient id and doctor id and meeting date
DROP PROCEDURE IF EXISTS approveMeeting;
DELIMITER $$
create procedure approveMeeting(IN MEET_ID INT)
begin
    update patient2doctor
    set request_status = 'a'
    where meeting_id = MEET_ID;
end $$
DELIMITER ;


-- update appointment status to "denied", given patient id and doctor id and meeting date
DROP PROCEDURE IF EXISTS denyMeeting;
DELIMITER $$
create procedure denyMeeting(IN MEET_ID INT)
begin
    update patient2doctor
    set request_status= 'd'
    where meeting_id = MEET_ID;
end $$
DELIMITER ;


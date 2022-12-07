-- create trigger that automatically updates the doctor's star reviews when a new review is added or updated in patient2doctor table
drop trigger if exists update_doctor_star_reviews;
DELIMITER $$
CREATE TRIGGER update_doctor_star_reviews
AFTER UPDATE ON patient2doctor
FOR EACH ROW
BEGIN
    UPDATE doctor
    SET star_reviews = (SELECT AVG(patient_star) FROM patient2doctor WHERE doc_id = NEW.doc_id)
    WHERE doc_id = NEW.doc_id;
END; $$
DELIMITER ;
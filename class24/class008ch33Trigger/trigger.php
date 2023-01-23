DELIMITER //
CREATE TRIGGER au_reassign_ticket
AFTER UPDATE ON technicians
FOR EACH ROW
BEGIN
IF NEW.available = 0 THEN
UPDATE tickets SET technician_id=0 WHERE technician_id=NEW.id;
END IF;
END;//

CREATE TRIGGER ad_delete_man_from_prod
after delete on manu
FOR EACH ROW
BEGIN
delete from prod where mid = old.mid;
END//

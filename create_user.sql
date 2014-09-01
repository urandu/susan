-- Create impact user
CREATE USER 'susan'@'localhost' IDENTIFIED BY 'susan_db_admin';
-- Grant permissions to impact user
GRANT INSERT ON susan* TO 'susan'@'localhost';
GRANT DELETE ON susan.* TO 'susan'@'localhost';
GRANT UPDATE ON susan.* TO 'susan'@'localhost';
GRANT SELECT ON susan.* TO 'susan'@'localhost';
-- Reload permissions 
FLUSH PRIVILEGES;

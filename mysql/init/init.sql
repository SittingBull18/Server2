-- WordPress DB
CREATE DATABASE IF NOT EXISTS amateurfunk_ulm;
CREATE USER IF NOT EXISTS 'amateurfunk_ulm'@'%' IDENTIFIED WITH caching_sha2_password BY 'tschuess';
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER ON amateurfunk_ulm.* TO 'amateurfunk_ulm'@'%';

-- Forum DB
-- CREATE DATABASE IF NOT EXISTS forum_db;
-- CREATE USER IF NOT EXISTS 'forum_user'@'%' IDENTIFIED WITH mysql_native_password BY 'FORUM_DB_PASSWORD';
-- GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER ON forum_db.* TO 'forum_user'@'%';

-- Blog DB
-- CREATE DATABASE IF NOT EXISTS blog_db;
-- CREATE USER IF NOT EXISTS 'blog_user'@'%' IDENTIFIED WITH mysql_native_password BY 'BLOG_DB_PASSWORD';
-- GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER ON blog_db.* TO 'blog_user'@'%';

FLUSH PRIVILEGES;

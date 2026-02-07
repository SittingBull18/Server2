-- Create databases for each application
CREATE DATABASE wordpress_db;
CREATE DATABASE forum_db;
CREATE DATABASE blog_db;

-- Create users and grant privileges for each database
CREATE USER 'wordpress_user'@'%' IDENTIFIED BY 'wordpress_password';
GRANT ALL PRIVILEGES ON wordpress_db.* TO 'wordpress_user'@'%';
FLUSH PRIVILEGES;

CREATE USER 'forum_user'@'%' IDENTIFIED BY 'forum_password';
GRANT ALL PRIVILEGES ON forum_db.* TO 'forum_user'@'%';
FLUSH PRIVILEGES;

CREATE USER 'blog_user'@'%' IDENTIFIED BY 'blog_password';
GRANT ALL PRIVILEGES ON blog_db.* TO 'blog_user'@'%';
FLUSH PRIVILEGES;

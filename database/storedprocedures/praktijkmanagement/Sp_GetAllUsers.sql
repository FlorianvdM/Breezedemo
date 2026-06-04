-- Active: 1779366829329@@127.0.0.1@3306@laravel
USE laravel;

DROP PROCEDURE IF EXISTS sp_GetAllUsers;

DELIMITER $$

CREATE PROCEDURE sp_GetAllUsers (
    IN p_id INT
)
BEGIN

    SELECT USRS.Id
        ,USRS.name
        ,USRS.email
        ,USRS.rolename
    FROM Users USRS
    WHERE USRS.Id != p_id;
    
END $$

DELIMITER ;
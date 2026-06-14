USE laravel;

DROP PROCEDURE IF EXISTS SP_GetAllUserroles;

DELIMITER $$

CREATE PROCEDURE SP_GetAllUserroles()
BEGIN

    SELECT 'praktijkmanagement' AS rolename
    UNION SELECT 'tandarts'
    UNION SELECT 'mondhygienist'
    UNION SELECT 'assistent'
    UNION SELECT 'patient';

END$$

DELIMITER ;
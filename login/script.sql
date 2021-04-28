CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_autentica`(
	in _curp varchar(18),
    in _clave varchar(100)
)
BEGIN
	declare clave_correcta varchar(100);
    
    if (select count(*) from usuario where curp = _curp) = 0 then
		select false as respuesta, "El usuario no existe" as mensaje;
	else
		select aes_decrypt(clave, 'phpescom') into clave_correcta 
		from usuario 
		where curp = _curp;
        
		if clave_correcta = _clave then
			select true as respuesta, "Inicio exitoso" as mensaje;
		else
			select false as respuesta, "Contraseña incorrecta" as mensaje;
		end if;
	end if;
END
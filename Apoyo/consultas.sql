
-- Obtener datos analisis Dental
SELECT `analisis_dental`.`id`,`analisis_dental`.`id_paciente`, 
nombre, `apellido_materno`, `apellido_materno`, 
`gingival`, `mucosas`, `amigdalas`, `paladar`, `piso_boca`, `frenillos`, `lengua`,
`tipo_denticion`, `higiene_bucal`, `observaciones`
FROM `paciente`, `analisis_dental`
WHERE `analisis_dental`.`id_paciente`= `paciente`.`id`
ORDER BY id ASC

-- Obtener datos analisis Facial
SELECT `analisis_facial`.`id`, `analisis_facial`.`id_paciente`,
nombre, `apellido_paterno`, `apellido_materno`,
`somatotipo`, `linea_media`, `biotipo_facial`, `simetria_facial`, `perfil`,
`forma_facial`, `nariz`, `tercio_facial_inferior`, `tercio_facial_medio`, `tercio_facial_inferior`,
`postura_labial`, `labio_superior`, `labio_inferior`
FROM `paciente`, `analisis_facial`
WHERE `analisis_facial`.`id_paciente`= `paciente`.`id`
ORDER BY id ASC

--Obtener datos analisis oclusal
SELECT `analisis_oclusal`.`id`, `analisis_oclusal`.`id_paciente`,
nombre, `apellido_paterno`, `apellido_materno`,
`clase_molar_d`, `clase_molar_i`, `clase_canina_d`, `sobremordida_h`
`sobremordida_v`, maxima_apertura, `interferencia`, `lado_balance`, `lado_trabajo`
FROM  `paciente`, `analisis_oclusal`
WHERE `analisis_oclusal`.`id_paciente`= `paciente`.`id`
ORDER BY `analisis_oclusal`.`id` ASC

--obtener datos DESviacion
 SELECT `desviacion`.`id`, `desviacion`.`id_paciente`,
nombre, `apellido_paterno`, `apellido_materno`,
`oclusion_apertura`, `oclusion_cierre`, `terapias`, `luxacion`,
`habitos_p`, `frecuencia`, `tono_muscular_perioral`, `tono_muscular_facial`
FROM  `paciente`, `desviacion`
WHERE `desviacion`.`id_paciente`= `paciente`.`id`
ORDER BY `desviacion`.`id` ASC
-----------------------------------------------------------------------------------------


--obtenr datos doctor paciente
SELECT doctor_paciente.id, doctor_paciente.id_doctor, doctor_paciente.id_paciente,
doctor.nombre, doctor.apellido_paterno, doctor.apellido_materno,
paciente.nombre, paciente.apellido_paterno, paciente.apellido_materno
FROM doctor_paciente, doctor, paciente
WHERE doctor_paciente.id_doctor = doctor.id
AND doctor_paciente.id_paciente = paciente.id
ORDER BY doctor_paciente.id ASC

--obtener datos citas
SELECT cita.id,
doctor.nombre AS d_nombre, doctor.apellido_paterno AS d_paterno, doctor.apellido_materno AS d_materno,
paciente.nombre AS p_nombre, paciente.apellido_paterno AS p_paterno, paciente.apellido_materno AS p_materno,
fecha, hora
from doctor_paciente, doctor, paciente, cita
WHERE cita.id_doctor_paciente = doctor_paciente.id
AND doctor_paciente.id_doctor=doctor.id
AND doctor_paciente.id_paciente= paciente.id
order by fecha, hora ASC

--obtener datos doctor paciente tratamiento 
SELECT doctor_paciente_tratamiento.id,
doctor.nombre, doctor.apellido_paterno, doctor.nombre,
paciente.nombre, paciente.apellido_paterno, paciente.apellido_materno,
tratamiento.nombre
from doctor_paciente_tratamiento, doctor_paciente, doctor, paciente, tratamiento
WHERE doctor_paciente_tratamiento.id_doctor_paciente = doctor_paciente.id
AND doctor_paciente_tratamiento.id_tratamiento = tratamiento.id
AND doctor_paciente.id_doctor=doctor.id
AND doctor_paciente.id_paciente= paciente.id
order by doctor_paciente_tratamiento.id ASC

--obtener datos pago
select pago.id,
doctor.nombre, doctor.apellido_paterno, doctor.nombre,
paciente.nombre, paciente.apellido_paterno, paciente.apellido_materno,
fecha, cantidad
from pago, doctor_paciente_tratamiento, doctor_paciente, doctor, paciente, tratamiento
WHERE pago.id_doctor_paciente_tratamiento=doctor_paciente_tratamiento.id 
AND doctor_paciente_tratamiento.id_doctor_paciente = doctor_paciente.id
AND doctor_paciente_tratamiento.id_tratamiento = tratamiento.id
AND doctor_paciente.id_doctor=doctor.id
AND doctor_paciente.id_paciente= paciente.id
order by pago.id ASC

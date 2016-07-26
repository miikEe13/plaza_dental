SELECT `paciente`.`nombre`, paciente.`apellido_paterno`, paciente.`apellido_paterno`,
`historial_clinica_paciente`.`enfermedad_padecida`,
`historial_clinica_paciente`.`tratamiento_actual`,
`historial_clinica_paciente`.`hospitalizaciones`, 
`historial_clinica_paciente`.`intervencion_quirurjica`,
historial_clinica_paciente.`problema_respiratorio`, 
historial_clinica_paciente.`extirpacion_amigdalas`, 
historial_clinica_paciente.`edad_extirpacion`, 
historial_clinica_paciente.`fuma_bebidas_alcoholicas`,
historial_clinica_paciente.`alergias`, 
historial_clinica_paciente.`traumatismos_fracturas`, 
historial_clinica_paciente.`enfermedad_padecida`, 
historial_clinica_paciente.`menarca`, 
historial_clinica_paciente.`ultimo_periodo`, 
historial_clinica_paciente.`depresion`,
historial_clinica_paciente.`observacion`
FROM `paciente`, historial_clinica_paciente
WHERE paciente.`id`=historial_clinica_paciente.`id_paciente`
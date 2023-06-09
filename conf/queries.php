<?php

        $sql0="SELECT c.carreraid,
                        c.nivel_formacionid,
                        nf.descripcion as nivel,
                        c.certificacion,
                        c.modalidadid,
                        m.descripcion as modalidad,
                        c.carga_horaria,
                        c.duracion,
                        c.school
                    FROM iusm_carreras c,
                            iusm_modalidades m,
                            iusm_nivel_formacion nf
                    WHERE c.nivel_formacionid = nf.nivel_formacionid  
                        AND c.modalidadid = m.modalidadid 
                        AND c.estadoid = '1'
                        AND nf.descripcion LIKE 'Pregrado'
                        ORDER BY c.nivel_formacionid, c.school, c.carreraid";
        
        $sql1="SELECT c.carreraid,
                            c.nivel_formacionid,
                            nf.descripcion as nivel,
                            c.certificacion,
                            c.modalidadid,
                            m.descripcion as modalidad,
                            c.carga_horaria,
                            c.duracion,
							c.school
                       FROM iusm_carreras c,
                            iusm_modalidades m,
                            iusm_nivel_formacion nf
                      WHERE c.nivel_formacionid = nf.nivel_formacionid  
                        AND c.modalidadid = m.modalidadid 
                        AND c.estadoid = '1'
                        AND nf.descripcion LIKE 'Grado'
                        ORDER BY c.carreraid ASC, c.nivel_formacionid, c.certificacion";
        
        $sql2="SELECT c.carreraid,
                            c.nivel_formacionid,
                            nf.descripcion as nivel,
                            c.certificacion,
                            c.modalidadid,
                            m.descripcion as modalidad,
                            c.carga_horaria,
                            c.duracion,
							c.school
                       FROM iusm_carreras c,
                            iusm_modalidades m,
                            iusm_nivel_formacion nf
                      WHERE c.nivel_formacionid = nf.nivel_formacionid  
                        AND c.modalidadid = m.modalidadid 
                        AND c.estadoid = '1'
                         AND nf.descripcion LIKE 'Ciclo%'
                        ORDER BY c.carreraid, c.nivel_formacionid, c.certificacion";

        $sql3="SELECT c.carreraid,
                            c.nivel_formacionid,
                            nf.descripcion as nivel,
                            c.certificacion,
                            c.modalidadid,
                            m.descripcion as modalidad,
                            c.carga_horaria,
                            c.duracion,
							c.school
                       FROM iusm_carreras c,
                            iusm_modalidades m,
                            iusm_nivel_formacion nf
                      WHERE c.nivel_formacionid = nf.nivel_formacionid  
                        AND c.modalidadid = m.modalidadid 
                        AND c.estadoid = '1'
                        AND nf.descripcion LIKE 'Posgrado'
                        ORDER BY c.carreraid ASC, c.nivel_formacionid, c.certificacion ";
                        
          $sql4="SELECT NOTICIAID, TITULO, RESUMEN, FECHA FROM noticias WHERE ESTADOID = 1 ORDER BY FECHA DESC LIMIT 3;";              
?>
<?php
// Heading
$_['heading_title']                           = 'MaxMind Anti-Fraude';

// Text
$_['text_fraud']                              = 'Anti-Fraud';
$_['text_success']                            = 'Exito: se ha modificado MaxMind anti-fraud!';
$_['text_edit']                               = 'Editar MaxMind Anti-Fraud';
$_['text_signup']                             = 'es un servicio de detección de fraude. Si usted no tiene una clave de licencia puede <a href="http://www.maxmind.com/?rId=opencart" target="_blank"><u>darse de alta aqui</u></a>.';
$_['text_country_match']                      = 'Match pais:';
$_['text_country_code']                       = 'Codigo del pais:';
$_['text_high_risk_country']                  = 'País de Alto Riesgo :';
$_['text_distance']                           = 'Distancia:';
$_['text_ip_region']                          = 'IP Region:';
$_['text_ip_city']                            = 'IP Ciudad:';
$_['text_ip_latitude']                        = 'IP Latitud:';
$_['text_ip_longitude']                       = 'IP Longitud:';
$_['text_ip_isp']                             = 'ISP:';
$_['text_ip_org']                             = 'IP Organizacion:';
$_['text_ip_asnum']                           = 'ASNUM:';
$_['text_ip_user_type']                       = 'IP tipo de usuario:';
$_['text_ip_country_confidence']              = 'IP pais confidencial:';
$_['text_ip_region_confidence']               = 'IP region confidencial:';
$_['text_ip_city_confidence']                 = 'IP ciudad confidencial:';
$_['text_ip_postal_confidence']               = 'IP Postal confidencial:';
$_['text_ip_postal_code']                     = 'IP codigo postal:';
$_['text_ip_accuracy_radius']                 = 'IP radio de presicion:';
$_['text_ip_net_speed_cell']                  = 'IP Celda de velocidad neta';
$_['text_ip_metro_code']                      = 'IP Codigo metro:';
$_['text_ip_area_code']                       = 'IP Codigo de area:';
$_['text_ip_time_zone']                       = 'IP zona horaria:';
$_['text_ip_region_name']                     = 'IP nombre de la region:';
$_['text_ip_domain']                          = 'IP Dominio:';
$_['text_ip_country_name']                    = 'IP nombre de la ciudad:';
$_['text_ip_continent_code']                  = 'IP Código Continente:';
$_['text_ip_corporate_proxy']                 = 'IP Proxy Corporativo:';
$_['text_anonymous_proxy']                    = 'Proxy Anonimo:';
$_['text_proxy_score']                        = 'Proxy puntuacion:';
$_['text_is_trans_proxy']                     = 'Proxy Es transparente:';
$_['text_free_mail']                          = 'correo gratuito:';
$_['text_carder_email']                       = 'Carder Email:';
$_['text_high_risk_username']                 = 'Nombre de usuario de alto riesgo:';
$_['text_high_risk_password']                 = 'Contraseña de alto riesgo:';
$_['text_bin_match']                          = 'Comparación de bin:';
$_['text_bin_country']                        = 'Bin paises:';
$_['text_bin_name_match']                     = 'Nombre de la casilla Match:';
$_['text_bin_name']                           = 'Nombre Bin:';
$_['text_bin_phone_match']                    = 'Bin telefono Match:';
$_['text_bin_phone']                          = 'Bin telefono:';
$_['text_customer_phone_in_billing_location'] = 'Número de teléfono del cliente en la ubicación de facturación:';
$_['text_ship_forward']                       = 'Envío hacia adelante:';
$_['text_city_postal_match']                  = 'Ciudad Postal Match:';
$_['text_ship_city_postal_match']             = 'Correspondencia postal de la ciudad de envío:';
$_['text_score']                              = 'Puntuacion:';
$_['text_explanation']                        = 'Explicación:';
$_['text_risk_score']                         = 'Puntuación de riesgo:';
$_['text_queries_remaining']                  = 'Consultas restantes:';
$_['text_maxmind_id']                         = 'Maxmind ID:';
$_['text_error']                              = 'Error:';

// Entry
$_['entry_key']                               = 'Clave de licencia MaxMind';
$_['entry_score']                             = 'Puntuación de riesgo';
$_['entry_order_status']                      = 'Orden de clasificacion';
$_['entry_status']                            = 'Estado';

// Help
$_['help_score']                              = 'Cuanto mayor sea la puntuación, más probable es que la orden sea fraudulenta. Establecer una puntuación entre 0 - 100.';
$_['help_order_status']                       = 'Las órdenes que tengan una puntuación sobre la puntuación de riesgo establecida se asignarán a este estado de pedido y no se le permitirá alcanzar el estado completo automáticamente.';
$_['help_country_match']                      = 'Si el país de la dirección IP coincide con el país de la dirección de facturación (desajuste = mayor riesgo).';
$_['help_country_code']                       = 'Código del País de la dirección IP.';
$_['help_high_risk_country']                  = 'Si la dirección IP o el país de la dirección de facturación está en Ghana, Nigeria o Vietnam.';
$_['help_distance']                           = 'Distancia de la dirección IP a la ubicación de facturación en kilómetros (gran distancia = mayor riesgo).';
$_['help_ip_region']                          = 'Estado / Región estimado de la dirección IP.';
$_['help_ip_city']                            = 'Ciudad estimada de la dirección IP.';
$_['help_ip_latitude']                        = 'Latitud estimada de la dirección IP.';
$_['help_ip_longitude']                       = 'Longitud estimada de la dirección IP.';
$_['help_ip_isp']                             = 'ISP de la dirección IP.';
$_['help_ip_org']                             = 'Organización de la dirección IP.';
$_['help_ip_asnum']                           = 'Número estimado de sistema autónomo de la dirección IP.';
$_['help_ip_user_type']                       = 'Tipo de usuario estimado de la dirección IP.';
$_['help_ip_country_confidence']              = 'Representando nuestra confianza que la localización del país es correcta.';
$_['help_ip_region_confidence']               = 'Representando nuestra confianza en que la ubicación de la región es correcta.';
$_['help_ip_city_confidence']                 = 'Representando nuestra confianza de que la ubicación de la ciudad es correcta.';
$_['help_ip_postal_confidence']               = 'Representing our confidence that the postal code location is correct.';
$_['help_ip_postal_code']                     = 'Código postal estimado de la dirección IP.';
$_['help_ip_accuracy_radius']                 = 'La distancia media entre la ubicación real del usuario final que utiliza la dirección IP y la ubicación devuelta por la base de datos GeoIP City, en millas.';
$_['help_ip_net_speed_cell']                  = 'Tipo de red estimado de la dirección IP.';
$_['help_ip_metro_code']                      = 'Código Metro estimado de la dirección IP.';
$_['help_ip_area_code']                       = 'Estimacion de código de área de la dirección IP..';
$_['help_ip_time_zone']                       = 'Zona horaria estimada de la dirección IP.';
$_['help_ip_region_name']                     = 'Estimacion de nombre de región de la dirección IP.';
$_['help_ip_domain']                          = 'Dominio estimado de la dirección IP.';
$_['help_ip_country_name']                    = 'Nombre de país estimado de la dirección IP.';
$_['help_ip_continent_code']                  = 'Código estimado del continente de la dirección IP.';
$_['help_ip_corporate_proxy']                 = 'Si el IP es un proxy corporativo en la base de datos o no.';
$_['help_anonymous_proxy']                    = 'Si la dirección IP es proxy anónimo (proxy anónimo = riesgo muy alto).';
$_['help_proxy_score']                        = 'Probabilidad de que la dirección IP sea un proxy abierto.';
$_['help_is_trans_proxy']                     = 'Si la dirección IP está en nuestra base de datos de servidores proxy transparentes conocidos, se devuelve si se transfiere IP como entrada.';
$_['help_free_mail']                          = 'Si el correo electrónico es de un proveedor gratuito de correo electrónico (correo electrónico gratuito = mayor riesgo).';
$_['help_carder_email']                       = 'Si el e-mail está en la base de datos de correos electrónicos de alto riesgo.';
$_['help_high_risk_username']                 = 'Si la entrada usernameMD5 está en la base de datos de nombres de usuario de alto riesgo. Sólo se devuelve si se incluye usernameMD5 en las entradas.';
$_['help_high_risk_password']                 = 'Si la entrada passwordMD5 está en la base de datos de contraseñas de alto riesgo. Sólo se devuelve si se incluye passwordMD5 en las entradas.';
$_['help_bin_match']                          = 'Si el país del banco emisor basado en el número BIN coincide con el país de la dirección de facturación.';
$_['help_bin_country']                        = 'Código del país del banco que emitió la tarjeta de crédito basándose en el número BIN.';
$_['help_bin_name_match']                     = 'Si el nombre del banco emisor coincide con el nombre BIN introducido. Un valor devuelto de Sí proporciona una indicación positiva de que el titular de la tarjeta posee una tarjeta de crédito. ';
$_['help_bin_name']                           = 'Nombre del banco que emitió la tarjeta de crédito basándose en el número BIN. Disponible para aproximadamente el 96% de números BIN.';
$_['help_bin_phone_match']                    = 'WSi el número de teléfono del servicio al cliente coincide con el número de teléfono BIN. Un valor devuelto de Sí proporciona una indicación positiva de que el titular de la tarjeta está en posesión de una tarjeta de crédito.';
$_['help_bin_phone']                          = 'Número de teléfono del servicio al cliente que aparece en la parte posterior de la tarjeta de crédito. Disponible para aproximadamente el 75% de los números de BIN. En algunos casos, el número de teléfono devuelto puede estar obsoleto.';
$_['help_customer_phone_in_billing_location'] = 'Si el número de teléfono del cliente está en el código postal de facturación. Un valor de retorno de Sí proporciona una indicación positiva de que el número de teléfono que aparece pertenece al titular de la tarjeta. Un valor de retorno de No indica que el número de teléfono puede estar en un área diferente o no puede aparecer en nuestra base de datos. NotFound se devuelve cuando el prefijo del número telefónico no se encuentra en nuestra base de datos. Actualmente sólo se admiten números de teléfono de EE.UU.';
$_['help_ship_forward']                       = 'Si la dirección de envío está en la base de datos de gotas de correo conocidas.';
$_['help_city_postal_match']                  = 'Si la ciudad de facturación y el estado coinciden con el código postal. Actualmente disponible sólo para direcciones de Estados Unidos, devuelve una cadena vacía fuera de los Estados Unidos.';
$_['help_ship_city_postal_match']             = 'Si la ciudad de envío y el estado coinciden con código postal. Actualmente disponible sólo para direcciones de Estados Unidos, devuelve una cadena vacía fuera de los Estados Unidos.';
$_['help_score']                              = 'Puntuación de fraude general basada en los resultados listados anteriormente. Esta es la puntuación de fraude original, y se basa en una fórmula sencilla. Ha sido sustituido por una puntuación de riesgo (véase más adelante), pero se mantiene para la compatibilidad hacia atrás.';
$_['help_explanation']                        = 'Una breve explicación de la puntuación, detallando qué factores contribuyeron a ella, según nuestra fórmula. Tenga en cuenta que esto corresponde a la puntuación, no al riskScore..';
$_['help_risk_score']                         = 'Nueva puntuación de fraude que representa la probabilidad estimada de que la orden es fraude, basada en el análisis de transacciones de minFraud anteriores. Requiere una actualización para los clientes que se inscribieron antes de febrero de 2007. ';
$_['help_queries_remaining']                  = 'El número de consultas restantes en su cuenta, puede utilizarse para alertarle cuando es posible que deba agregar más consultas a su cuenta.';
$_['help_maxmind_id']                         = 'Identificador único, utilizado para hacer referencia a las transacciones cuando se reporta actividades fraudulentas a MaxMind. Este informe le ayudará a MaxMind a mejorar su servicio y le permitirá a una característica planificada personalizar la fórmula de puntuación de fraude basada en su historial de devolución de cargos.';
$_['help_error']                              = 'Devuelve una cadena de error con un mensaje de advertencia o una razón por la cual la solicitud falló.';

// Error
$_['error_permission']                        = 'Advertencia: ¡No tiene permiso para modificar el anti-fraude de MaxMind!';
$_['error_key']		                          = '¡Clave de licencia requerida!';
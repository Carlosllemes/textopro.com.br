<?

if (!function_exists('goal_conversion')):

/*

Função para criar metrificações personalizadas para GA4
=> Chamada: $goal = array([métrica: pagina], [evento], [argumentos] ...);

- métrica 	[obrigatório]
- evento 	[valor default]
- arguments [valor default]
- métodos 	[valor default]

*/


function goal_conversion($goal, $event = 'screen_view', $arguments = null, $name = null, $href = null) {

	$arguments = (is_null($arguments) || !$arguments) ? 'page_location' : $arguments;

	$element = array(
		'goal' 		=> $goal,
		'arguments' => $arguments,
		'name'		=> (is_null($name) || empty($name) ? 'Evento '. $goal : $name),
		'href'		=> (is_null($href) || empty($href) ? '(none)' : $href), 
		'event' 	=> (in_array(strtolower($goal), array('contato', 'fale-conosco')) ? 'Contato' : $event),
	);
	
	switch ($event):

		case 'page_view':

			$arguments = array(
				'\'page_location\''  , '\'' . $element['href'] . $element['goal'] . '\'', 
				'\'page_path\''		 , '\'/' . $element['goal'] . '\'',
			);

			break;

		case 'file_download':

			$arguments = array(
				'\'file_extension\'' , '\'.' . end(explode('.', $element['arguments'])) . '\'',
				'\'file_name\''		 , '\'' . $element['arguments'] . '\'',
				'\'link_url\''		 , '\'' . $element['href'] . $element['arguments'] . '\'', 
				'\'link_text\''		 , '\'Download de arquivo.\'',
			);

			break;

		case 'click':

			$arguments = array(
				'\'link_classes\'' 	 , '\'' . ($element['arguments'] == 'page_location' ? 'whatsapp' : $element['arguments']) .  '\'',
				'\'link_domain\''	 , '\'' . $element['href'] . '\'',
				'\'link_url\''		 , '\'' . $element['href'] . $element['goal'] . '\'', 
			);

			break;
		
		default:

			$arguments = array('\'screen_name\'', '\'' . $element['goal'] . '\'',);

			break;

	endswitch;


	$script = 'gtag(\'event\', \'' . $element['name'] . '\', {'; 

	foreach ($arguments as $i => $value):

		$script .= '' . $value . '' . ($i % 2 ? ', ' : ': ') . '';	

	endforeach;

	$script .= '});';

	// Escreve o código
	echo $script;

} 


if(in_array(strtolower($urlPagina), array('contato', 'fale-conosco', 'orcamento'))):
	// envio automático evento contato
	goal_conversion($urlPagina, null, null, 'Contato', null);
elseif($goal):
	// evento manual
	goal_conversion((!$goal[0] ? null : $goal[0]), (!$goal[1] ? null : $goal[1]), (!$goal[2] ? null : $goal[2]), (!$goal[3] ? null : $goal[3]), (!$goal[4] ? null : $goal[4]));
endif;

endif;
<?
/** Google Fonts Tag and Call CSS Generator
* 
* Como usar:
* 
* Propriedade de configuração 1 - Sete para TRUE caso for usar as fontes do Google no site, caso contrario, sete para FALSE.
* 
* Exemplo:
* define('USE_GOOGLE_FONTS', true); - habilitado
* define('USE_GOOGLE_FONTS', false); - desabilitado
*
*  
* Propriedade de configuração 2 - Defina as fontes que seram usadas entre aspas simples e separadas por virgula dentro do array.
* 
* Exemplo:
* $fontFamily = ['nome da fonte', 'nome da fonte'];
* 
* 
* Propriedade de configuração 3 - Defina as espessuras(weight) PARA CADA UMA das fontes setadas no array $fontFamily, do passo anterior, em formato de array e separadas por virgula.
* 
* Exemplo:
* $weights = [[400, 800], [400, 600, 800]];
* 
* 
* Propriedade de configuração 4 - Caso necessario o uso, defina as espessuras(weight) do estilo italico (italic) PARA CADA UMA das fontes setadas no array $fontFamily, assim como no passo anterior, em formato de array e separadas por virgula. Se não, deixe o array vazio.
* 
* Exemplo:
* $italicWeights = [[400, 800], [300, 500]]; - habilitado 
* $italicWeights = []; - desabilitado 
* 
* ATENÇAO: 
* Use no mínimo um estilo e no maximo três estilos de fonte.
* A fonte "Montserrat" é setada por padrão, caso não ocorra nenhuma especificade de outras fontes nesta função.
*/

// Google Fonts Tag Generator
if(!function_exists('GoogleFontsTagGenerator')){
    define('USE_GOOGLE_FONTS', true); // Propriedade de configuração 1
    $fontFamily = ['Montserrat']; // Propriedade de configuração 2
    $weights = [[400, 500, 700, 800]]; // Propriedade de configuração 3
    $italicWeights = [[400, 700]]; // Propriedade de configuração 4
    
    function GoogleFontsTagGenerator($fontFamily, $weights, $italicWeights){
        $gfQuery = '';
        if(USE_GOOGLE_FONTS){
            foreach($fontFamily as $fontIndex => $font){
                $fSeparator = $fontIndex == 0 ? '' : '&';
                $hasItalic = $italicWeights[$fontIndex] ? 'ital,' : '';
                $fontToUrl = str_replace(' ', '+', $font);
                $gfQuery .= $fSeparator.'family='.$fontToUrl.':'.$hasItalic.'wght@';
                foreach($weights[$fontIndex] as $weightIndex => $weight){
                    $hasItalic = $italicWeights[$fontIndex] ? '0,' : '';
                    $wSeparator = (count($weights[$fontIndex]) - 1 != $weightIndex) ? ';' : '';
                    $gfQuery .= $hasItalic.$weight.$wSeparator;
                }
                if($italicWeights[$fontIndex]){
                    foreach($italicWeights[$fontIndex] as $italicWeightIndex => $iWeight){
                        $gfQuery .= ';1,'.$iWeight;
                    }
                }
            }
            return '<link
                        rel="preload"
                        href="https://fonts.googleapis.com/css2?'.$gfQuery.'&amp;display=swap"
                        as="style"
                        onload="this.onload=null;this.rel=\'stylesheet\'"
                    >
                    <noscript>
                        <link
                            href="https://fonts.googleapis.com/css2?'.$gfQuery.'&amp;display=swap"
                            rel="stylesheet"
                            type="text/css"
                        >
                    </noscript>';
        }
        return '';
    }
}

// Google Fonts Call CSS Generator
if(!function_exists('GoogleFontsStyleGenerator')){
    function GoogleFontsStyleGenerator($fontFamily){
        $varName = ['--primary-font', '--secondary-font', '--tertiary-font'];
        $varQuery = '';
        if(USE_GOOGLE_FONTS){
            foreach($fontFamily as $fontIndex => $font){
                $varQuery .= $varName[$fontIndex].': "'.$font.'", sans-serif; ';
            }
            return '<style> :root { '.$varQuery.' } </style>';
        }
        return '';
    }
}
?>
<!--
Desenvolvido Por: mLabs
-->
<?php
$url = "http://m-l-a-b-s.com/";
$title = "estudante";

$var = array(
        "1" => array(
                  "nerd" => "mLabs",
                  "image" => "https://www.google.com.br/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjFpem_jrnVAhWFD5AKHaDkApEQjhwIBQ&url=https%3A%2F%2Ftenor.com%2Fview%2Fwormser-revenge-nerds-gif-7818231&psig=AFQjCNEARudDWCG7rDvHGVJFr5CGzUbIIg&ust=1501782642705901"
                  ),
        "2" => array(
                  "trapaceiro" => "mLabs",
                  "image" => "https://www.google.com.br/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiAqpzdj7nVAhUBjZAKHWSaCQsQjhwIBQ&url=https%3A%2F%2Fcapricho.abril.com.br%2Fvida-real%2Fera-uma-vez-17-gifs-que-resumem-a-sua-historia-de-terror-com-a-matematica%2F&psig=AFQjCNFKhWYvPqxhPuNWmoiT5R5A9l-0ug&ust=1501782983603130"
                  ),
        "3" => array(
                  "desorientado" => "mLabs",
                  "image" => "https://www.google.com.br/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiIps6jj7nVAhXIIJAKHVY2ANoQjhwIBQ&url=https%3A%2F%2Fcapricho.abril.com.br%2Fvida-real%2Fera-uma-vez-17-gifs-que-resumem-a-sua-historia-de-terror-com-a-matematica%2F&psig=AFQjCNEcU3ZNEmQHCV4omW2FHCuZHETfog&ust=1501782766161773"
                  ),
         "4" => array(
                  "estudioso" => "mLabs",
                  "image" => "https://www.google.com.br/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiUg7XCj7nVAhVLFJAKHR81CtcQjhwIBQ&url=http%3A%2F%2Fblog.aulalivre.net%2F9-dicas-para-tornar-seu-estudo-mais-produtivo%2F&psig=AFQjCNG2WAt_frdNqBrPYfq2qe2MNz19oQ&ust=1501782914152519"
                  ),
        );

$section = array_rand($var);

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?php echo $var[$section]['titulo']; ?>" />
<meta property="og:url" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:type" content="video.other">

<script>
  setTimeout(function(){
    window.location='https://www.mlabs.com.br/';
  },100);
</script>

<?php
$title = "Mufasa: The Lion King";
include_once 'header.php';
?>
<div class="film">
    <img src="film12.jpg" alt="Oppenheimer">
    <p>Oppenheimer é um épico biográfico de 2023, dirigido por Christopher Nolan, que narra a vida de J. Robert Oppenheimer, o físico teórico conhecido como o "pai da bomba atômica". Baseado no livro "American Prometheus" de Kai Bird e Martin J. Sherwin, o filme explora o papel de Oppenheimer no Projeto Manhattan, que desenvolveu as primeiras armas nucleares durante a Segunda Guerra Mundial, e os desafios éticos e pessoais que ele enfrentou.</p>
</div>

<h1><?php echo $title; ?></h1>
<button onclick="likePost(9)">Curtir</button>
<span id="likeCount1">0</span>

<div class="trailer">
    <iframe width="693" height="390" src="<iframe width="853" height="480" src="<iframe width="853" height="480" src="https://www.youtube.com/embed/uYPbbksJxIg" title="Oppenheimer | New Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>" title="Wicked - Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>" title="Mufasa: The Lion King | Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<div class="criticas">
    <img src="film12crt.jpg" alt="Oppenheimer">
    <div class="crt">
        <h2>Críticas</h2>
        <h4>Pontos positivos</h4>
        <ul>
            
            <il>✅ Atuações: Cynthia Erivo e Ariana Grande foram amplamente elogiadas por suas interpretações de Elphaba e Galinda, respectivamente, trazendo profundidade e emoção aos personagens.</il><br>
            <il>✅ Produção Visual: A direção de arte e os efeitos visuais foram destacados pela recriação vibrante e detalhada do mundo de Oz.</il><br>
            <il>✅ Trilha Sonora: As adaptações das músicas originais do musical foram bem recebidas, com arranjos que respeitam a obra original enquanto introduzem novas nuances.</il><br>

        </ul>
            <h4>Pontos negativos</h4>
        <ul>
            <il>❌ Duração: Alguns críticos apontaram que o filme poderia ter sido mais conciso, com certas cenas se estendendo além do necessário.</il><br>
            <il>❌ Ritmo: Houve menções de que o ritmo do filme varia, com transições abruptas entre momentos de alta energia e cenas mais lentas.</il><br>
        </ul>

        <p>No geral, "Wicked: Part One" é um filme que explora a origem das icônicas bruxas de Oz antes dos eventos de "O Mágico de Oz". Ele se concentra na história de Elphaba, uma jovem incompreendida com pele verde, que mais tarde se tornará a Bruxa Má do Oeste, e de sua amizade com Glinda, a futura Bruxa Boa do Sul. A trama aborda temas como aceitação, preconceito, ambição e as complexidades das escolhas morais, mostrando como eventos e decisões moldaram seus caminhos opostos.</p>
    </div>
</div>

<div class="elenco">
    <h2>Elenco principal</h2>
    <ol>
        <il>Cynthia Erivo como Elphaba Thropp (a futura Bruxa Má do Oeste)</il><br>

        <il>Ariana Grande como Galinda Upland (que se tornará Glinda, a Boa)xs</il><br>

        <il>Jonathan Bailey como Fiyero Tigelaar</il><br>

        <il>Ethan Slater como Boq</il><br>

        <il>Michelle Yeoh como Madame Morrible</il><br>

        <il>Jeff Goldblum como O Mágico de Oz</il><br>
    </ol>
</div>

<?php include_once 'footer.php'; ?>
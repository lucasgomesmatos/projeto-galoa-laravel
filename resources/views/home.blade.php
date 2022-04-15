@extends('master.master')

@section('my-css')
    <link rel="stylesheet" href="{{ url(mix('assets/css/style.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('assets/css/global.css')) }}">
@endsection

@section('content')
  {{-- Responsivo --}}
    <section class="side-menu-xl">
      <div class="name-event">
        <h1>SLACA 2019</h1>
      </div>
      <nav class="side-bar-xl">
        <ul>
            <li class="link-menu"><a href="">Apresentação</a></li>
            <li class="link-menu"><a href="">Comitês</a></li>
            <li class="link-menu"><a href="">Autores</a></li>
            <li class="link-menu"><a href="">Eixos temáticos</a></li>
            <li class="link-menu active"><a href="">Trabalhos</a></li>
            <li class="link-menu"><a href="">Contato</a></li>
        </ul>
    </nav>
    </section>
    {{-- Normal --}}
    <section class="side-menu">
        <div class="name-event">
            <h1>SLACA 2019</h1>
        </div>
        <nav class="side-bar">
            <ul>
                <li><img src="./assets/images/13-slaca.png" alt="Logo do evento 13 Slaca" class="logo-event"></li>
                <li class="link-menu"><a href="">Apresentação</a></li>
                <li class="link-menu"><a href="">Comitês</a></li>
                <li class="link-menu"><a href="">Autores</a></li>
                <li class="link-menu"><a href="">Eixos temáticos</a></li>
                <li class="link-menu active"><a href="">Trabalhos</a></li>
                <li class="link-menu"><a href="">Contato</a></li>
            </ul>
        </nav>
    </section>

    <section class="container-layout">
        <header class="header-container">
            <section class="header">
                <div class="left-header-item">
                    <p class="title-intro-p">Anais do Simpósio Latino Americano de Ciências de Alimentos </p>
                    <h1 class="title-intro-h1">Anais do 13º Simpósio Latino Americano de Ciência de Alimentos </h1>
                    <p class="title-intro-p">ISSN: 1234-5678</p>
                </div>
                <div class="rigth-header-item">
                    <div class="select-language">
                        <span><img src="./assets/images/language-image.svg" alt="Imagem do Globo do Mundo"></span>
                        <select name="" autofocus name="language">
                            <option value="">PT, BR</option>
                            <option value="">ENG</option>
                        </select>
                        <span class="dropdown"><img src="./assets/images/dropdown.svg" alt="dropdown"></span>
                    </div>
                    <div class="user-apresention">
                        <div class="apresention-item">
                            <p>Bem vindo!</p>
                            <p class="apresention-item-email">alguem12@galoascience.com</p>
                        </div>
                        <div class="apresention-image-user">
                            <img src="./assets/images/user.png" alt="Foto do Usuário">
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <main class="content">
            <section class="content-container">
                <section class="content-intro">
                    <div class="intro-header">
                        <div class="intro-title">
                            <h1>Análise sensorial de preparações funcionais desenvolvidas para escolares entre 09 e 15 anos,
                                do
                                município
                                de Campinas/SP </h1>
                        </div>

                        <div class="intro-buttons-cite">
                            <div class="buttons">
                                <a href="" class="download"> <img src="./assets/images/download.svg"
                                        alt="butão de download"> Download</a>
                                <a href="" class="star"><img src="./assets/images/star.svg"
                                        alt="butão de favorito"></a>
                                <a href="" class="doi"><img src="./assets/images/doi.svg" alt="butão de doi"></a>
                            </div>
                            <div class="cite">
                                <p>COMO CITAR ESSE TRABALHO?</p>
                            </div>
                        </div>
                    </div>

                    <div class="intro-footer">
                        <div class="intro-video">
                            <iframe width="784" height="470" src="https://www.youtube.com/embed/Qo2oU_6bYaU?controls=0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="intro-buttons-cite-xl">
                          <div class="buttons">
                              <a href="" class="download"> <img src="./assets/images/download.svg"
                                      alt="butão de download"> Download</a>
                              <a href="" class="star"><img src="./assets/images/star.svg"
                                      alt="butão de favorito"></a>
                              <a href="" class="doi"><img src="./assets/images/doi.svg" alt="butão de doi"></a>
                          </div>
                          <div class="cite">
                              <p>COMO CITAR ESSE TRABALHO?</p>
                          </div>
                      </div>

                        <div class="details">
                            <h2>Detalhes</h2>
                            <div class="details-container">
                                <div class="details-items">
                                    <p>Tipo de Apresentação: <span class="strong-details">Pôster</span></p>
                                    <p>Eixo temático:<span class="strong-details">Alimentação e saúde (AS)</span></p>
                                    <p>Palavras-chaves:<span class="strong-details">Alimentos funcionais, alimentação
                                            escolar.</span></p>
                                </div>

                                <div class="details-autors">
                                    <h3>Autores:</h3>
                                    <p>Galileo Galilei<sup>1</sup></p>
                                    <p>Berta Lange de Morretes<sup>2</sup></p>
                                    <p>Isaac Newton<sup>3</sup></p>
                                    <p>Cesar Lattes<sup>1</sup></p>
                                    <p>Stephen Hawking<sup>4</sup></p>
                                </div>

                                <div class="details-universities">
                                    <p><sup>1</sup>Universidade Estadual de Campinas</p>
                                    <p><sup>2</sup>Universidade de São Paulo</p>
                                    <p><sup>3</sup>Instituto Nacional de Pesquisas Espaciais</p>
                                    <p><sup>4</sup>Universidade Federal do Rio de Janeiro</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="content-abstract">
                    <h2>Resumo</h2>
                    <div class="abstract-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae turpis auctor, mollis
                            felis ut,
                            commodo turpis. Phasellus felis mauris, egestas eget cursus et, iaculis quis lacus. Fusce auctor
                            eros sed
                            magna ultricies gravida. Etiam aliquam dictum nisl, vel aliquet enim accumsan sit amet. Donec
                            finibus nisi
                            tellus, ut viverra lorem vestibulum ut. Phasellus condimentum orci id leo condimentum lobortis
                            et non lorem.
                            Sed id nisl metus. Quisque sollicitudin ligula in sapien scelerisque, ac gravida eros vestibulum
                            Phasellus
                            condimentum orci id leo condimentum lobortis et non lorem. Sed id nisl metus. Quisque
                            sollicitudin ligula in
                            sapien scelerisque, ac gravida eros vestibulum. Etiam aliquam dictum nisl, vel aliquet enim
                            accumsan sit
                            ametl accumsant... ver mais </p>

                    </div>
                </section>

                <section class="content-discussions">
                    <h2>Discussões</h2>
                    <div class="discussions-container">
                        <h3>Compartilhe suas ideias ou dúvidas com os autores!</h3>
                        <div class="discussions-icons">
                            <img src="./assets/images/hand-plant.svg" alt="Ícone da Mão planta">
                            <img src="./assets/images/questions.svg" alt="ícone de Discussões">
                            <img src="./assets/images/people.svg" alt="Ícone de duas pessoas">
                        </div>
                        <div class="discussions-text">
                            <p>Sabia que o maior estímulo no desenvolvimento científico e cultural é a curiosidade? Deixe
                                seus questionamentos ou sugestões para o autor!</p>
                        </div>
                        <div class="discussions-button">
                            <a href="" class="button-add">
                                <img src="./assets/images/icon-add.svg" alt="Ícone de adicionar">
                                criar tópico
                            </a>
                        </div>
                    </div>

                    <section class="discussions-cards-container">
                        <div class="card-topic">
                            <div class="card-header">
                                <h3 class="subject">Assunto da pergunta aparece aqui</h3>
                                <p class="name-question">Carlos Henrique Santos</p>
                            </div>
                            <div class="card-body">
                                <p class="question">Comecinho da pergunta aparece aqui resente relato inscreve-se no
                                    campo da análise da dimensão e impacto de processo formativo situado impacto de processo
                                    formativo processo...</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="information">
                                    <img src="./assets/images/information.svg" alt="Informações">
                                </a>
                                <a href="" class="like-button">
                                    <img class="" src="./assets/images/heart.svg" alt="Like">
                                </a>
                                <a href="">
                                    <p>1 like</p>
                                </a>
                                <a href="">
                                    <p>1 resposta</p>
                                </a>
                            </div>
                        </div>
                        <div class="card-topic">
                            <div class="card-header">
                                <h3 class="subject">Assunto da pergunta aparece aqui</h3>
                                <p class="name-question">Carlos Henrique Santos</p>
                            </div>
                            <div class="card-body">
                                <p class="question">Comecinho da pergunta aparece aqui resente relato inscreve-se no
                                    campo da análise da dimensão e impacto de processo formativo situado impacto de processo
                                    formativo processo...</p>
                            </div>
                            <div class="card-footer">
                                <a href="" class="information">
                                    <img src="./assets/images/information.svg" alt="Informações">
                                </a>
                                <a href="" class="like-button">
                                    <img class="" src="./assets/images/heart.svg" alt="Like">
                                </a>
                                <a href="">
                                    <p>1 like</p>
                                </a>
                                <a href="">
                                    <p>1 resposta</p>
                                </a>
                            </div>
                        </div>
                    </section>
                </section>
            </section>
        </main>
        <footer>
            <img src="./assets/images/footer.png" alt="Galoá">
        </footer>
    </section>
@endsection

@section('my-js')
    <script type="module" src="{{ url(mix('assets/js/scripts.js')) }}"></script>
@endsection

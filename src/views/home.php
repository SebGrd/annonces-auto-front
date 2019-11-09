<section class="slider-search">
    <div class="container">
        <div class="row">
            <div class="col">
                <!--        1600x800-->
                <div class="slick-home">
                    <div class="single-slide-1">
                        <img src="<?= frontFolder('/img/slider-home3.jpg') ?>" alt="Image slider" class="img-fluid">
                    </div>
                    <div class="single-slide-2">
                        <img src="<?= frontFolder('/img/slider-home2.jpg') ?>" alt="Image slider" class="img-fluid">
                    </div>
                </div>

                <div class="recherche-home">
                    <form action="#">
                        <div class="form-group">
                            <label for="marque">Marque</label>
                            <select name="marque" id="marque" class="form-control">
                                <option value="1">Citoën</option>
                                <option value="2">Peugeot</option>
                                <option value="3">KIA</option>
                                <option value="4">Audi</option>
                                <option value="5">Tesla</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="marque">Energie</label>
                            <select name="marqueVoiture" id="marque" class="form-control">
                                <option value="1">Diesel</option>
                                <option value="2">Essence</option>
                                <option value="3">Electrique</option>
                                <option value="4">GPL</option>
                                <option value="5">Hydrogène</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Type de boite</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="typeBoite" id="boiteM"
                                       value="Manuelle">
                                <label for="boiteM" class="form-check-label">Manuelle</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="typeBoite" id="boiteA"
                                       value="Automatique">
                                <label for="boiteA" class="form-check-label">Automatique</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chevaux">Puissance DIN (min)</label>
                            <input type="range" min="1" max="100" name="ch" value="50" class="form-control-range"
                                   id="chevaux">
                        </div>
                        <div class="form-group">
                            <label for="portes">Nombre de portes</label>
                            <select name="nbPortes" id="portes" class="form-control">
                                <option value="3">3</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <button type="submit" class="btn btn-secondary">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="new-annonces">
    <div class="container">
        <h2>Les dernières annonces</h2>
        <div class="slick-new-annonces">
            <div class="slide-annonce">
                <div class="card-annonce-home">
                    <div class="card-annonce-home-image">
                        <img src="<?= frontFolder('/img/annonce1.jpg'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="card-annonce-home-body">
                        <h3>KIA CEED 3</h3>
                        <h4>III 1.4 T-GDI 140 ISG ACTIVE DCT7</h4>
                        <ul>
                            <li><i class="fas fa-gas-pump"></i>Diesel</li>
                            <li><i class="fas fa-cogs"></i> Manuelle</li>
                            <li><i class="fas fa-road"></i> 19562 km</li>
                            <li><i class="fas fa-calendar-alt"></i> 2018</li>
                        </ul>
                        <p class="price"><b>19 800 €</b></p>
                    </div>
                </div>
            </div>
            <div class="slide-annonce">
                <div class="card-annonce-home">
                    <div class="card-annonce-home-image">
                        <img src="<?= frontFolder('/img/annonce2.jpg'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="card-annonce-home-body">
                        <h3>CITROËN C5 AIRCROSS</h3>
                        <h4>1.5 BLUEHDI 130 S&S SHINE EAT8</h4>
                        <ul>
                            <li><i class="fas fa-gas-pump"></i>Diesel</li>
                            <li><i class="fas fa-cogs"></i>Automatique</li>
                            <li><i class="fas fa-road"></i>50 km</li>
                            <li><i class="fas fa-calendar-alt"></i>2019</li>
                        </ul>
                        <p class="price"><b>29 900 €</b></p>
                    </div>
                </div>
            </div>
            <div class="slide-annonce">
                <div class="card-annonce-home">
                    <div class="card-annonce-home-image">
                        <img src="<?= frontFolder('/img/slider-home3.jpg'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="card-annonce-home-body">
                        <h3>KIA CEED 3</h3>
                        <h4>III 1.4 T-GDI 140 ISG ACTIVE DCT7</h4>
                        <ul>
                            <li><i class="fas fa-gas-pump"></i>Diesel</li>
                            <li><i class="fas fa-cogs"></i>Manuelle</li>
                            <li><i class="fas fa-road"></i>19562 km</li>
                            <li><i class="fas fa-calendar-alt"></i>2018</li>
                        </ul>
                        <p class="price"><b>19 800 €</b></p>
                    </div>
                </div>
            </div>
            <div class="slide-annonce">
                <div class="card-annonce-home">
                    <div class="card-annonce-home-image">
                        <img src="<?= frontFolder('/img/slider-home2.jpg'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="card-annonce-home-body">
                        <h3>KIA CEED 3</h3>
                        <h4>III 1.4 T-GDI 140 ISG ACTIVE DCT7</h4>
                        <ul>
                            <li><i class="fas fa-gas-pump"></i>Diesel</li>
                            <li><i class="fas fa-cogs"></i>Manuelle</li>
                            <li><i class="fas fa-road"></i>19562 km</li>
                            <li><i class="fas fa-calendar-alt"></i>2018</li>
                        </ul>
                        <p class="price"><b>19 800 €</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="large-info">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="info-body">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores distinctio dolore esse id
                        in nihil nisi perferendis quasi quibusdam, quos repudiandae rerum tempore unde vel! Aspernatur
                        consequatur eos tempora.</p>
                    <a href="#" class="btn btn-secondary">Déposer une annonce</a>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="info-img-container">
                    <img src="<?= frontFolder('/img/camions.jpg'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="stats">
    <div class="container">
        <div class="stats-list">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="stat">
                        <span class="number">6591</span>
                        <span class="label">Annonces postées</span>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="stat">
                        <span class="number">4213</span>
                        <span class="label">Voitures différentes</span>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="stat">
                        <span class="number">23</span>
                        <span class="label">Marques</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

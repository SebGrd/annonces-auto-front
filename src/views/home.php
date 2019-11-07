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
                                <input type="radio" class="form-check-input" name="typeBoite" id="boiteM" value="Manuelle">
                                <label for="boiteM" class="form-check-label">Manuelle</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="typeBoite" id="boiteA" value="Automatique">
                                <label for="boiteA" class="form-check-label">Automatique</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="chevaux">Puissance DIN (min)</label>
                            <input type="range" min="1" max="100" name="ch" value="50" class="form-control-range" id="chevaux">
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
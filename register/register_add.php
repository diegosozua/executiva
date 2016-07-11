<main>
    <header>
        <h2>Preencha os Campos</h2>
    </header>
    <form action="../model/register_db.php" method="post" id="register_add">
        <div>
            <div class="row">
                <div class="6u 12u$(mobile)">
                    <input id="name" type="text" name="name" placeholder="Nome" />
                </div>
                <div class="6u$ 12u$(mobile)">
                    <input id="phone" type="text" name="phone" placeholder="Celular" />
                </div>
                <div class="6u 12u$(mobile)">
                    <input id="state" type="text" name="state" placeholder="Estado" />
                </div>
                <div class="6u$ 12u$(mobile)">
                    <input id="city" type="text" name="city" placeholder="Cidade" />
                </div>
                <br><br>
                <div class="12u$">
                    <input id="submit" type="submit" value="Enviar" />
                </div>
            </div>
        </div>
    </form>
</main>

<div class="content">
                <img src="{{ asset('images/landing/logo.png') }}" alt="Logo"><br>
                <img src="{{ asset('images/landing/texto.png') }}" alt="Logo">
                 <h2 ><b>Nos ajude a combater essa<br> doença diariamente.</b></h2>
                <img src="{{ asset('images/landing/texto2.png') }}" alt="Logo">
               <br><br>
                
                {!! Form::open(array('url' => '/')) !!}
                    <input type="email"
                       name="email"
                       placeholder="E-mail:"
                       size="47"
                       required
                       ><br><br>
                    <input type="phone"
                       name="phone"
                       placeholder="Fone:"
                       size="47"
                       required
                       ><br><br>
                    <a href="/home"
                       class="btn btn-success"
                    >Obrigado, já participo</a>
                    <input type="submit"
                       class="btn btn-success"
                       value="Participar"
                       >
                    
                {!! Form::close() !!}    
            </div>
@extends('layouts.navbar')
@section('content')
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="d-flex justify-content-center align-items-center">

                <div class="text-center">
                    <div class="card p-4 mt-6" style="background-color:#111; color:white;">
                        <h2 style="color:#55009b;">Faça a sua encomenda personalizada!</h2>
                        <p style="color:gray;">Digite os detalhes do seu pedido</p>

                        <div class="mb-3 text-start">
                            <label for="inputGroupSelect01" class="form-label">Produto</label>

                            <select class="form-select border-0" id="inputGroupSelect01" name="produto">
                                <option value="" disabled selected>Escolha seu produto...</option>
                                <option value="1">Bolo com decoração de cemitério</option>
                                <option value="2">Bolo com decoração de abóbora</option>
                                <option value="3">Pão de mel</option>
                                <option value="4">Pão de mel (quadrado)</option>
                            </select>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="inputGroupSelect02" class="form-label">Recheio</label>

                            <select class="form-select border-0" id="inputGroupSelect02" name="recheio">
                                <option value="" disabled selected>Escolha seu recheio...</option>
                                <option value="1">Doce de leite</option>
                                <option value="2">Nutella</option>
                                <option value="3">Ganache de chocolate</option>
                                <option value="4">Ninho</option>
                            </select>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="inputGroupSelect03" class="form-label">Cobertura</label>

                            <select class="form-select border-0" id="inputGroupSelect03" name="cobertura">
                                <option value="" disabled selected>Escolha sua cobertura...</option>
                                <option value="1">Chocolate ao leite</option>
                                <option value="2">Chocolate meio amargo</option>
                                <option value="3">Chocolate branco</option>
                            </select>
                        </div>
                        <div class="mb-2 text-start">
                            <label>Descrição</label>
                            <input type="" id="Descrição" class="form-control bg-dark text-white border-0"
                                placeholder="Digite a descrição do seu pedido">
                        </div>
                        <div class="mb-2 text-start">
                            <label>Telefone</label>
                            <input type="" id="telefone_entrega" class="form-control bg-dark text-white border-0"
                                placeholder="Digite seu número">
                        </div>
                        <div class="mb-2 text-start">
                            <label>Endereço</label>
                            <input type="" id="Endereço_entrega" class="form-control bg-dark text-white border-0"
                                placeholder="Digite o endereço de entrega">
                        </div>
                        <div class="mb-2 text-start">
                            <label>Data de Entrega</label>
                            <input type="date" id="data_entrega" class="form-control bg-dark text-white border-0">
                        </div>
                        
                        <div class="d-flex justify-content-center w-100">
                            <a class="btn text-white w-100 mt-2"
                            style="background-color:#55009b;"
                            id="btn_encomenda">
                            Finalizar
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
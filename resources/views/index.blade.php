@extends('layout')

@section('titulo', 'far cry 5')

@section('sidebar')
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            Dashboard <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-file">
                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                <polyline points="13 2 13 9 20 9"></polyline>
            </svg>
            Orders
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-shopping-cart">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg>
            Products
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            Customers
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-bar-chart-2">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg>
            Reports
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layers">
                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                <polyline points="2 17 12 22 22 17"></polyline>
                <polyline points="2 12 12 17 22 12"></polyline>
            </svg>
            Integrations
        </a>
    </li>
</ul>

<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Saved reports</span>
    <a class="d-flex align-items-center text-muted" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-plus-circle">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="16"></line>
            <line x1="8" y1="12" x2="16" y2="12"></line>
        </svg>
    </a>
</h6>

<ul class="nav flex-column mb-2">
    <li class="nav-item">
        <a class="nav-link" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-file-text">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
            Current month
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-file-text">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
            Last quarter
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-file-text">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
            Social engagement
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-file-text">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
            Year-end sale
        </a>
    </li>
</ul>
@endsection


@section('content')

<style>
    .largura {
        width: 150px;
    }
</style>

<form id="formFranquia">
    <div id="FranquiaSession" style="margin-top: 20px;">
        <h2><b> Dados do cliente</b></h2>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control form-control-sm" id="cnpj" name="cnpj">
            </div>
            <div class="form-group col-md-6">
                <label for="dataAbertura">Data de Abertura</label>
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome_fantasia">Nome fantasia</label>
                <input type="text" class="form-control form-control-sm" id="nome_fantasia" name="nome_fantasia">
            </div>
            <div class="form-group col-md-6">
                <label for="razao_social">Razão social</label>
                <input type="text" class="form-control form-control-sm" id="razao_social" name="razao_social">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cnae">CNAE</label>
                <input type="text" class="form-control form-control-sm" id="cnae" name="cnae">
            </div>
            <div class="form-group col-md-4">
                <label for="inscricao_municipal">Inscrição municipal</label>
                <input type="text" class="form-control form-control-sm" id="inscricao_municipal" name="inscricao_municipal">
            </div>

            <div class="form-group col-md-4">
                <label for="inscricao_estatual">Inscrição estatual</label>
                <input type="text" class="form-control form-control-sm" id="inscricao_estatual" name="inscricao_estatual">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="text" class="form-control form-control-sm" id="email" name="email">
            </div>
            <div class="form-group col-md-3">
                <label for="telefone_residencial">Telefone</label>
                <input type="text" class="form-control form-control-sm" id="telefone_residencial" name="telefone_residencial" max="9">
            </div>
            <div class="form-group col-md-3">
                <label for="telefone_celular">Celular</label>
                <input type="text" class="form-control form-control-sm" id="telefone_celular" name="telefone_celular">
            </div>
        </div>
    </div>
    <div id="enderecoSession" style="margin-top: 20px;">
        <h2><b>Endereço</b></h2>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control form-control-sm" id="cep" name="cep">
            </div>
            <div class="form-group col-md-8">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control form-control-sm" id="logradouro" name="logradouro">
            </div>
            <div class="form-group col-md-2">
                <label for="numero">Número</label>
                <input type="number" class="form-control form-control-sm" id="numero" name="numero">
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control form-control-sm" id="complemento" name="complemento">
            </div>
            <div class="form-group col-md-6">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control form-control-sm" id="bairro" name="bairro">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cidade">Município</label>
                <input type="text" class="form-control form-control-sm" id="cidade" name="cidade">
            </div>

            <div class="form-group col-md-4">
                <label for="estado">UF</label>
                <select class="custom-select" id="inputGroupSelect01" id="estado" name="estado">
                    <option selected>selecione um estado...</option>
                    <option value="1">Bahia</option>
                    <option value="2">São Paulo</option>
                    <option value="3">Rio de Janeiro</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="pais">País</label>
                <input type="text" class="form-control form-control-sm" id="pais" name="pais">
            </div>
        </div>


    </div>
    <!--
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        -->
    <div id="btnPanel" style="margin-top: 20px; align-items: center">
        <button type="submit" class="btn btn-success btn-sm largura">Cadastrar</button>
        <button type="cancel" class="btn btn-secondary btn-sm largura">Cancelar</button>
    </div>
</form>

<h2 style="margin-top: 20px;"><b> Tabela de clientes</b></h2>

<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>Header</th>
            <th>Header</th>
            <th>Header</th>
            <th>Header</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1,001</td>
            <td>Lorem</td>
            <td>ipsum</td>
            <td>dolor</td>
            <td>sit</td>
        </tr>
        <tr>
            <td>1,002</td>
            <td>amet</td>
            <td>consectetur</td>
            <td>adipiscing</td>
            <td>elit</td>
        </tr>
        <tr>
            <td>1,003</td>
            <td>Integer</td>
            <td>nec</td>
            <td>odio</td>
            <td>Praesent</td>
        </tr>
        <tr>
            <td>1,003</td>
            <td>libero</td>
            <td>Sed</td>
            <td>cursus</td>
            <td>ante</td>
        </tr>
        <tr>
            <td>1,004</td>
            <td>dapibus</td>
            <td>diam</td>
            <td>Sed</td>
            <td>nisi</td>
        </tr>
        <tr>
            <td>1,005</td>
            <td>Nulla</td>
            <td>quis</td>
            <td>sem</td>
            <td>at</td>
        </tr>
        <tr>
            <td>1,006</td>
            <td>nibh</td>
            <td>elementum</td>
            <td>imperdiet</td>
            <td>Duis</td>
        </tr>
        <tr>
            <td>1,007</td>
            <td>sagittis</td>
            <td>ipsum</td>
            <td>Praesent</td>
            <td>mauris</td>
        </tr>
        <tr>
            <td>1,008</td>
            <td>Fusce</td>
            <td>nec</td>
            <td>tellus</td>
            <td>sed</td>
        </tr>
        <tr>
            <td>1,009</td>
            <td>augue</td>
            <td>semper</td>
            <td>porta</td>
            <td>Mauris</td>
        </tr>
        <tr>
            <td>1,010</td>
            <td>massa</td>
            <td>Vestibulum</td>
            <td>lacinia</td>
            <td>arcu</td>
        </tr>
        <tr>
            <td>1,011</td>
            <td>eget</td>
            <td>nulla</td>
            <td>Class</td>
            <td>aptent</td>
        </tr>
        <tr>
            <td>1,012</td>
            <td>taciti</td>
            <td>sociosqu</td>
            <td>ad</td>
            <td>litora</td>
        </tr>
        <tr>
            <td>1,013</td>
            <td>torquent</td>
            <td>per</td>
            <td>conubia</td>
            <td>nostra</td>
        </tr>
        <tr>
            <td>1,014</td>
            <td>per</td>
            <td>inceptos</td>
            <td>himenaeos</td>
            <td>Curabitur</td>
        </tr>
        <tr>
            <td>1,015</td>
            <td>sodales</td>
            <td>ligula</td>
            <td>in</td>
            <td>libero</td>
        </tr>
    </tbody>
</table>

@endsection

@section('script')
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
console.log('teste ok!');
@endsection
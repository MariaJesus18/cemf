<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <form class="mb-3" action="{{route('subjects.update', $subject->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="name" id="nome" class="form-control" value="{{$subject->name}}">
                </div>
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
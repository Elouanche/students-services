<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f4f4;
        }

        .form-container {
            margin-top: 5rem;
        }

        .form-card {
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-card-header {
            background-color: #FFC107;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 10px;
            text-align: center;
        }

        .form-card-body {
            padding: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-custom {
            background-color: #FFC107;
            color: black;
            width: 100%;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #FFB300;
            color: white;
        }

        .back-link {
            margin-top: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card form-card">
                    <div class="form-card-header">
                        <h4>Modifier l'annonce</h4>
                    </div>
                    <div class="form-card-body">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('ads.update', $ad->id) }}" method="POST">
                            @csrf
                            @method('PUT') 

                            <div class="mb-3">
                                <label for="title" class="form-label">Titre :</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $ad->title) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description :</label>
                                <textarea id="description" name="description" class="form-control" required>{{ old('description', $ad->description) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-custom">Mettre à jour</button>
                        </form>

                        <div class="back-link">
                            <a href="{{ route('ads.index') }}" class="btn btn-link">Retour à la liste des annonces</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

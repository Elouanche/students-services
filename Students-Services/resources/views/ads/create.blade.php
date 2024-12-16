<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une annonce</title>
    <!-- Lien vers la feuille de styles Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optionnel : Lien vers une feuille de styles personnalisée -->
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

        .form-error {
            color: red;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card form-card">
                    <!-- Titre du formulaire -->
                    <div class="form-card-header">
                        <h4>Créer une nouvelle annonce</h4>
                    </div>
                    <!-- Corps du formulaire -->
                    <div class="form-card-body">
                        <!-- Formulaire de création -->
                        <form action="{{ route('ads.store') }}" method="POST">
                            @csrf

                            <!-- Titre de l'annonce -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Titre :</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="form-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description de l'annonce -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description :</label>
                                <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="form-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Catégorie de l'annonce -->
                            <div class="mb-3">
                                <label for="category" class="form-label">Catégorie :</label>
                                <select id="category" name="category" class="form-select" required>
                                    <option value="" disabled selected>Choisissez une catégorie</option>
                                    <option value="Prêt de matériel" {{ old('category') == 'Prêt de matériel' ? 'selected' : '' }}>Prêt de matériel</option>
                                    <option value="Cours particulier" {{ old('category') == 'Cours particulier' ? 'selected' : '' }}>Cours particulier</option>
                                    <option value="Groupe d’étude" {{ old('category') == 'Groupe d’étude' ? 'selected' : '' }}>Groupe d’étude</option>
                                    <option value="Sorties" {{ old('category') == 'Sorties' ? 'selected' : '' }}>Sorties</option>
                                </select>
                                @error('category')
                                    <div class="form-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Bouton de soumission -->
                            <button type="submit" class="btn btn-custom">Créer l'annonce</button>
                        </form>

                        <!-- Lien de retour -->
                        <div class="back-link">
                            <a href="{{ route('ads.index') }}" class="btn btn-link">Retour à la liste des annonces</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lien vers les scripts Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
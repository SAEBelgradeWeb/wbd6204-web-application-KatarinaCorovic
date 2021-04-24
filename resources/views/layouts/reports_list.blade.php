@extends('layouts.app')

@section('content')



<div class="col-sm-3">
    <?php require_once "views/partials/user.php";?>
</div>
<div class="col-sm-9">
    <div class="container-fluid tableContainer">
        <div class="tableTitle">
            <div class="buttonDiv">
                <a href="/ships/create" class="btn btn-info">Add new Post</a>
            </div>
            <div class="titlePage">
                <h2>Ships:</h2>
            </div>
        </div>
        <div class="row wrapperTable">
            <div class="col-12 md-6">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <?php foreach ($ships as $ship): ?>
                    <tr>
                        <td><?= $ship->id ?></td>
                        <td><?= $ship->shipName ?></td>
                        <td><?= $ship->type ?></td>
                        <td><a href="/ships/show?id=<?= $ship->id ?>" class="btn btn-info">Show</a> <a href="/ships/edit?id=<?=
                            $ship->id ?>" class="btn btn-warning">Edit</a> <a href="/ships/destroy?id=<?=
                            $ship->id ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

@endsection

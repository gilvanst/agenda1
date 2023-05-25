<?php
    include_once "templates/head.php";
?>
<body>
    <?php include_once "templates/header.php"; ?> 
    
    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ''): ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?> 
        
        <h1 id="main-title">Minha Agenda</h1>
        
        <?php if(count( $contato ) > 0): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contato as $contatos): ?>
                        <tr>
                        <td scope="row" class="col-id"><?= $contatos["id"] ?></td>
                            <td scope="row"><?= $contatos["name"] ?></td>
                            <td scope="row"><?= $contatos["telefone"] ?></td>
                            <td class="actions">
                                <a href="<?= $BASE_URL ?>show.php?id=<?= $contatos["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="#"><i class="far fa-edit edit-icon"></i></a>
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </td>
                        </tr>
                        
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">Sem contatos registrados <a href="<?$BASE_URL ?>create.php ">Registre já</a></p>
        
        <?php endif; ?>


    </div>
    
</body>
</html>
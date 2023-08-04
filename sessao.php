<?php
session_start();
?>

<?php
session_start();
$_SESSION['username'] = 'joao123';
?>

<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Bem-vindo, " . $_SESSION['username'];
} else {
    echo "Usuário não logado";
}
?>

<?php
session_start();
unset($_SESSION['username']);
?>

<?php
session_start();
session_destroy();
?>

<?php
// Conexão com o banco de dados
$db_host = 'seu_host';
$db_user = 'seu_usuario';
$db_password = 'sua_senha';
$db_name = 'seu_banco_de_dados';

// Funções personalizadas de manipulação de sessão
function db_session_open($save_path, $session_name)
{
    global $db_handle;
    $db_handle = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    return $db_handle ? true : false;
}

function db_session_close()
{
    global $db_handle;
    mysqli_close($db_handle);
    return true;
}

function db_session_read($session_id)
{
    global $db_handle;
    $session_id = mysqli_real_escape_string($db_handle, $session_id);
    $query = "SELECT session_data FROM sessions WHERE session_id = '$session_id' AND session_timestamp > NOW() - INTERVAL 30 MINUTE";
    $result = mysqli_query($db_handle, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        return $row['session_data'];
    } else {
        return '';
    }
}

function db_session_write($session_id, $session_data)
{
    global $db_handle;
    $session_id = mysqli_real_escape_string($db_handle, $session_id);
    $session_data = mysqli_real_escape_string($db_handle, $session_data);
    $query = "REPLACE INTO sessions (session_id, session_data, session_timestamp) VALUES ('$session_id', '$session_data', NOW())";
    mysqli_query($db_handle, $query);
    return true;
}

function db_session_destroy($session_id)
{
    global $db_handle;
    $session_id = mysqli_real_escape_string($db_handle, $session_id);
    $query = "DELETE FROM sessions WHERE session_id = '$session_id'";
    mysqli_query($db_handle, $query);
    return true;
}

function db_session_gc($maxlifetime)
{
    global $db_handle;
    $maxlifetime = mysqli_real_escape_string($db_handle, $maxlifetime);
    $query = "DELETE FROM sessions WHERE session_timestamp < NOW() - INTERVAL $maxlifetime SECOND";
    mysqli_query($db_handle, $query);
    return true;
}

// Define as funções personalizadas como manipuladores de sessão
session_set_save_handler(
    'db_session_open',
    'db_session_close',
    'db_session_read',
    'db_session_write',
    'db_session_destroy',
    'db_session_gc'
);

// Inicia a sessão
session_start();
?>

<?php
// Após o usuário fazer login e validar as credenciais
// Obtenha o ID do usuário a partir do banco de dados
$user_id = obter_id_do_usuario_no_banco_de_dados($username, $password); // Substitua pela função que obtém o ID do usuário

// Armazene o ID do usuário na variável de sessão
session_start(); // Certifique-se de iniciar a sessão antes de usar a variável $_SESSION
$_SESSION['user_id'] = $user_id;
?>

<?php
echo "ID do usuário: " . $_SESSION['user_id'];
?>

<?php
session_start(); // Inicia a sessão ou recupera a sessão existente

$_SESSION['user_id'] = 123; // Define o ID do usuário na variável de sessão
?>

<?php
session_start(); // Inicia a sessão ou recupera a sessão existente

// Acessa o ID do usuário armazenado na variável de sessão
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    echo "ID do usuário: " . $user_id;
} else {
    echo "ID do usuário não encontrado na sessão.";
}
?>

<?php
include 'arquivo1.php';
include 'arquivo2.php';
?>


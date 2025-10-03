<?php
if (extension_loaded('pdo_pgsql')) {
    echo "PDO PostgreSQL está instalado\n";
} else {
    echo "PDO PostgreSQL NÃO está instalado\n";
}

if (extension_loaded('pgsql')) {
    echo "PostgreSQL está instalado\n";
} else {
    echo "PostgreSQL não está instalado\n";
}

echo "Extensões carregadas:\n";
print_r(get_loaded_extensions());
?>

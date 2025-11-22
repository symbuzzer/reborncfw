<?php
$server_version = "20251116";

$messages = [
    "en" => [
        "update" => "New update available!\nCurrent version: %s\nInstalled version: %s\nTo install, visit avalibeyaz.com/s3 from your computer.\nDo you want to view the changelog?",
        "no_update" => "No new update.\nCurrent version: %s\nInstalled version: %s\nYou already have the latest version.",
        "missing" => "Version parameter is missing.",
        "module_check" => "Do you want to check for module updates?"
    ],
    "fr" => [
        "update" => "Nouvelle mise à jour disponible!\nVersion actuelle: %s\nVersion installée: %s\nPour l'installer, rendez-vous sur avalibeyaz.com/s3 depuis votre ordinateur.\nVoulez-vous voir la liste des modifications?",
        "no_update" => "Pas de nouvelle mise à jour.\nVersion actuelle: %s\nVersion installée: %s\nVous avez déjà la dernière version.",
        "missing" => "Paramètre de version manquant.",
        "module_check" => "Souhaitez-vous vérifier les mises à jour des modules?"
    ],
    "de" => [
        "update" => "Neues Update verfügbar!\nAktuelle Version: %s\nInstallierte Version: %s\nZum Installieren besuchen Sie avalibeyaz.com/s3 von Ihrem Computer.\nMöchten Sie die Änderungs liste anzeigen?",
        "no_update" => "Kein neues Update.\nAktuelle Version: %s\nInstallierte Version: %s\nSie verwenden bereits die neueste Version.",
        "missing" => "Versionsparameter fehlt.",
        "module_check" => "Möchten Sie nach Modul-Updates suchen?"
    ],
    "it" => [
        "update" => "Nuovo aggiornamento disponibile!\nVersione corrente: %s\nVersione installata: %s\nPer installarlo, visita avalibeyaz.com/s3 dal tuo computer.\nVuoi visualizzare l'elenco delle modifiche?",
        "no_update" => "Nessun nuovo aggiornamento.\nVersione corrente: %s\nVersione installata: %s\nHai già l'ultima versione.",
        "missing" => "Parametro versione mancante.",
        "module_check" => "Vuoi controllare gli aggiornamenti dei moduli?"
    ],
    "tr" => [
        "update" => "Yeni güncelleme mevcut!\nGüncel sürüm: %s\nYüklü sürüm: %s\nYüklemek için bilgisayarınızdan avalibeyaz.com/s3 adresini ziyaret edin.\nDeğişiklik listesini görüntülemek ister misiniz?",
        "no_update" => "Yeni güncelleme yok.\nGüncel sürüm: %s\nYüklü sürüm: %s\nZaten en yeni sürümü kullanıyorsunuz.",
        "missing" => "Version parametresi eksik.",
        "module_check" => "Modül güncellemelerine bakmak ister misiniz?"
    ],
    "nl" => [
        "update" => "Nieuwe update beschikbaar!\nHuidige versie: %s\nGeïnstalleerde versie: %s\nOm te installeren, bezoek avalibeyaz.com/s3 vanaf uw computer.\nWilt u de lijst met wijzigingen bekijken?",
        "no_update" => "Geen nieuwe update.\nHuidige versie: %s\nGeïnstalleerde versie: %s\nU gebruikt al de nieuwste versie.",
        "missing" => "Versieparameter ontbreekt.",
        "module_check" => "Wilt u naar module-updates zoeken?"
    ]
];

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if(!array_key_exists($lang, $messages)){
    $lang = "en";
}

$redirect = false;
$has_update = false;
$no_update = false;

if(isset($_GET['version'])){
    $client_version = $_GET['version'];
    if($client_version < $server_version){
        $status_message = sprintf($messages[$lang]['update'], 'v'.$server_version, 'v'.$client_version);
        $redirect = true;
        $has_update = true;
    } else {
        $status_message = sprintf($messages[$lang]['no_update'], 'v'.$server_version, 'v'.$client_version);
        $no_update = true;
    }
} else {
    $status_message = sprintf($messages[$lang]['missing'], 'v'.$server_version);
}
?>

<title>
<?php
switch($lang){
    case "tr": echo "Yzlm.güncl."; break;
    case "de": echo "Aktualisier."; break;
    case "fr": echo "MàJ log."; break;
    case "nl": echo "Sw-update"; break;
    case "it": echo "Aggiorn. SW"; break;
    default: echo "SW update";
}
?>
</title>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            background-color: black;
            color: white;
            margin: 0;
            height: 100vh;
        }
    </style>
<script>
    window.onload = function() {
        var msg = <?php echo json_encode($status_message); ?>;
        <?php if($has_update): ?>
        if (confirm(msg)) {
            window.location.href = "https://symbuzzer.github.io/reborncfw/changelog";
        } else {
            window.open('', '_self');
            window.close();
        }
        <?php elseif($no_update): ?>
        alert(msg);
        if (confirm(<?php echo json_encode($messages[$lang]['module_check']); ?>)) {
            window.location.href = "https://symbuzzer.github.io/reborncfw/modules";
        } else {
            window.open('', '_self');
            window.close();
        }
        <?php else: ?>
        alert(msg);
        window.open('', '_self');
        window.close();
        <?php endif; ?>
    };
</script>
</head>
<body>
</body>
</html>

function dateFR($datetime) {
    setlocale(LC_ALL, 'fr_FR');
    return strftime('%d %B %Y &agrave; %Hh%M', strtotime($datetime));
}
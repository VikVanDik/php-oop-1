<?php 
$movies = [
    new Movie ('V for Vendetta', ['Drama', 'Action'], new Media ('VForVendetta.jpg', 'V'), '2015', '132'),
    new Movie ('The butterfly effect', ['Drama', 'Sci-fi'], new Media ('TheButterflyEffect.jpg', 'TBE'), '2004', '120'),
    new Movie ('Limitless', ['Thriller'], new Media ('Limitless.jpg', 'Limitless'),'2011', '105')
];

$tvSeries = [
    new TVSerie ('How I met your mother', ['Sitcom'], new Media ('HIMYM.jpg', 'HIMYM'), '2005', '2014', '208', '9'),
    new TVSerie ('Brooklyn-99', ['Sitcom'], new Media ('Brooklyn99.jpg', 'Brooklyn'), '2013', '2021', '153', '8')
]
?>
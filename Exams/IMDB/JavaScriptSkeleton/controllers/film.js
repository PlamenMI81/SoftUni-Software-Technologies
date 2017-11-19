const Film = require('../models/Film');

module.exports = {
    index: (req, res) => {
        Film.find().then(films => {
            res.render('film/index', {'films': films})
        });
    },
    createGet: (req, res) => {
        res.render('film/create');
    },
    createPost: (req, res) => {
        let filmArgs = req.body;

        if (!filmArgs.name
            || !filmArgs.genre
            || !filmArgs.director
            || !filmArgs.year) {
            res.render('film/create');
            return;
        }

        Film.create(filmArgs).then(film => {
            res.redirect('/');
        })
    },
    editGet: (req, res) => {
        let id = req.params.id;

        Film.findById(id).then(film => {
            res.render('film/edit', film)
        }).catch(err => {
            res.redirect('/');
        });
    },
    editPost: (req, res) => {
        let id = req.params.id;
        let film = req.body;

        if (!film.name
            || !film.genre
            || !film.director
            || !film.year) {
            res.redirect('/');
            return;
        }

        Film.findByIdAndUpdate(id, film).then(film => {
            res.redirect('/');
        });
    },
    deleteGet: (req, res) => {
        let id = req.params.id;

        Film.findById(id).then(film => {
            res.render('film/delete', film)
        }).catch(err => {
            res.redirect('/');
        });
    },
    deletePost: (req, res) => {
        let id = req.params.id;

        Film.findByIdAndRemove(id).then(film => {
            res.redirect('/')
        }).catch(err => {
            res.redirect('/');
        });
    }
};
import { Selector } from 'testcafe';

fixture `Test Formulaire Majuscules`
    .page `http://localhost:8000/form.php`;

test('Saisir un nom et vérifier la conversion en majuscules', async t => {
    await t
        // 1. On tape le nom en minuscules
        .typeText('#nom-input', 'tony stark')
        
        // 2. On clique sur le bouton
        .click('#valider-btn')

        // 3. On vérifie que l'élément d'affichage contient bien "TONY STARK"
        .expect(Selector('#affichage-nom').innerText).eql('TONY STARK');
});
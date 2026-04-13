import { Selector } from 'testcafe';

fixture `Test Formulaire Majuscules`
    .page `http://localhost:8000/form.php`;

test('Saisir un nom et vérifier la conversion en majuscules', async t => {
    await t
        .typeText('#nom-input', 'tony stark')
        
        .click('#valider-btn')

        .expect(Selector('#affichage-nom').innerText).eql('TONY STARK');
});
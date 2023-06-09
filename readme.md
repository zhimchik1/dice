# Coin Toss Game

Це проста гра "Кидання монети", яка дозволяє гравцю кидати монету та отримувати результат - орла або решку. Також можна вибрати іншу гру, таку як гральна кість або колода карт.

## Запуск гри

1. Склонуйте репозиторій або завантажте файли на свій локальний сервер.

2. Встановіть залежності, якщо вони є (у цьому прикладі немає залежностей).

3. Відкрийте файл `index.php` у вашому веб-браузері.

4. Виберіть тип гри, натиснувши на відповідну кнопку: "Coin Toss" (Кидання монети), "Dice Roll" (Гральна кість) або "Card Draw" (Витяг картки).

5. Натисніть кнопку "Play", щоб запустити гру.

6. Результат гри буде відображено на сторінці.

## Додавання нової гри

Щоб додати нову гру до цього додатку, виконайте наступні кроки:

1. Створіть новий клас гри у відповідній папці в директорії `src/Game/`. Наприклад, якщо ви хочете додати гру з гральною кісткою, створіть файл `DiceGame.php` та визначте в ньому клас гри.

2. Реалізуйте інтерфейс `RandomSourceInterface` у вашому новому класі гри та реалізуйте метод `getRandomElement()`, який повертатиме випадковий елемент гри.

3. Відкрийте `index.php` у веб-браузері та виберіть нову гру зі списку доступних.

4. Натисніть кнопку "Play", щоб запустити нову гру.

5. Насолоджуйтесь новою грою!

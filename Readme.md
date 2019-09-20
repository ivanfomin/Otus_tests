Добавил обработку некорректных данных на дату<br>
tests/acceptance/ValidCarsCest.php<br>
Для некорректных данных  
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
<br>И все сотальные тесты, также предусматривают ситуацию с не валидной датой
<br>
Поля введенные пользователем, обрабатываются на уровне типов php<br>
Конструктором класса Back
<br>
     public function __construct(int $card_number, string $card_holder, $card_expiration, int $cvv, int $order_number, float $sum)

<br>
А также типами полей формы  type="number" <br>
Но для обработки данной ошибке добавил юнит тест
<br>
tests/unit/TypeErrorTest.php<br>
https://github.com/ivanfomin/Otus_tests/blob/93963653b6ef2c887beed5d47d2386d9a81dbc0d/tests/unit/TypeErrorTest.php#L5
<br>
<br>
Позитивный тест на успешное выполнение <br>
tests/acceptance/SuccessCest.php<br>
https://github.com/ivanfomin/Otus_tests/blob/93963653b6ef2c887beed5d47d2386d9a81dbc0d/tests/acceptance/SuccessCest.php#L3
<br>
<br>

Системные тесты: Cvv, OrderIsPaid<br>
 tests/unit/service
 <br>
 https://github.com/ivanfomin/Otus_tests/tree/master/tests/unit/service
 <br>
 Последнии изменения делал исключительно с помощью Codeception


Файл result.txt содержит результат успешного прохождения всех тестов<br>
OK (52 tests, 67 assertions)


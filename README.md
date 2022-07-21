## MongoDB Installation and configuration

I take mongodb latest library from official mongodb site, if you wanted to install mongodb latest version so run this command on your root directory: composer require mongodb/mongodb

**Step 1:** Open config/autoload.php file and add 'mongo_db' in $autoload['libraries'] array.

**Step 2:** Open config/autoload.php file and add 'mongo_db' in $autoload['config'] array.

**Step 3:** Open config/mongo_db.php file and configure MongoDB connection.

> `$config['host'] = 'localhost';`<br>
> `$config['port'] = 27017;`<br>
> `$config['username'] = 'localhost';`<br>
> `$config['password'] = 'password';`<br>
> `$config['collecion'] = 'database';`<br>
> `$config['authenticate'] = FALSE;`<br>

### Workflow<br>
$mongo = $this->mongo_db->getConn() = (new MongoDB\Client($connection_string))->Collecion_name;

### How to get and insert data in MongoDB with CodeIgniter.<br>
Get Data<br>
`$mongo = $this->mongo_db->getConn();`<br>
`$Customers = $mongo->Customer->find(['FromCity' => 'HOUSTON']);`<br>
`foreach ($Customers as $Customer) {`<br>
    `echo $Customers['name'], "\n";`<br>
`}`<br>

Insert Data<br>
`$mongo = $this->mongo_db->getConn();`<br>
`$insertOneResult = $mongo->Customer->insertOne(`<br>
        `['username' => 'John007','email' => 'john@example.com','name' => 'John Smith']`<br>
    `);`<br>
`print_r("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());`<br>

Customer = Document

**All queries in Mongodb library you can find:** https://docs.mongodb.com/php-library/v1.7/tutorial/crud/

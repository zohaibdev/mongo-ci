## MongoDB Installation and configuration

I take mongodb latest library from official mongodb site, if you wanted to install mongodb latest version so run this command on your root directory: composer require mongodb/mongodb

**Step 1:** Download the package and unzip it on the root directory.

**Step 2:** Open config/autoload.php file and add 'mongo_db' in $autoload['libraries'] array.

**Step 3:** Open config/autoload.php file and add 'mongo_db' in $autoload['config'] array.

**Step 4:** Open config/mongo_db.php file and configure MongoDB connection.

> `$config['host'] = 'localhost';`
> `$config['port'] = 27017;`
> `$config['username'] = 'localhost';`
> `$config['password'] = 'password';`
> `$config['collecion'] = 'database';`
> `$config['authenticate'] = FALSE;`

### Workflow

$mongo = $this->mongo_db->getConn() = (new MongoDB\Client($connection_string))->Collecion_name;

### How to get and insert data in MongoDB with CodeIgniter.

Get Data 

`$mongo = $this->mongo_db->getConn();`

`$Customers = $mongo->Customer->find(['FromCity' => 'HOUSTON']);`

`foreach ($Customers as $Customer) {`

    `echo $Customers['name'], "\n";`

`}`


Insert Data

`$mongo = $this->mongo_db->getConn();`

`$insertOneResult = $mongo->Customer->insertOne(`

        `['username' => 'John007','email' => 'john@example.com','name' => 'John Smith']`

    `);`

`print_r("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());`

Customer = Document

**All queries in Mongodb library you can find:** https://docs.mongodb.com/php-library/v1.7/tutorial/crud/

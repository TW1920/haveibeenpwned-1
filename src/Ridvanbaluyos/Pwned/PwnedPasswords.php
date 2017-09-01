<?php

namespace Ridvanbaluyos\Pwned;

use \Ridvanbaluyos\Pwned\Pwned as Pwned;
/**
 * Getting all data classes in the system
 * https://haveibeenpwned.com/API/v2#PwnedPasswords
 *
 * @package    Pwned
 * @author     Ridvan Baluyos <ridvan@baluyos.net>
 * @link       https://github.com/ridvanbaluyos/haveibeenpwned
 * @license    MIT
 */
class PwnedPasswords extends Pwned
{
    private $password;

    /**
     * PwnedPasswords constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This function gets all pawned passwords.
     *
     * @return array
     */
    public function get(): array
    {
        // No password has been set, return empty array.
        if (!isset($this->password)) return [];

        $url = $this->endpoint . 'pwnedpassword/' . $this->password;
        $pwnedPasswords = $this->requestGet($url);

        return $pwnedPasswords;
    }

    /**
     * Sets the password.
     *
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
        return $this;
    }
}
<?php

namespace App\Factory;

use App\Entity\Client;
use App\Repository\ClientRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<client>
 *
 * @method static Client|Proxy createOne(array $attributes = [])
 * @method static Client[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Client|Proxy find(object|array|mixed $criteria)
 * @method static Client|Proxy findOrCreate(array $attributes)
 * @method static Client|Proxy first(string $sortedField = 'id')
 * @method static Client|Proxy last(string $sortedField = 'id')
 * @method static Client|Proxy random(array $attributes = [])
 * @method static Client|Proxy randomOrCreate(array $attributes = [])
 * @method static Client[]|Proxy[] all()
 * @method static Client[]|Proxy[] findBy(array $attributes)
 * @method static Client[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Client[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static ClientRepository|RepositoryProxy repository()
 * @method Client|Proxy create(array|callable $attributes = [])
 */
final class ClientFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'age' => self::faker()->randomNumber(),
            'name' => self::faker()->text(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Student $client): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Client::class;
    }
}

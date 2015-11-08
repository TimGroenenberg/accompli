<?php

namespace Accompli;

/**
 * AccompliEvents.
 *
 * @author  Niels Nijens <nijens.niels@gmail.com>
 **/
final class AccompliEvents
{
    /**
     * The CREATE_CONNECTION event is dispatched when a connection (connection adapter) needs to be created for a Host.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\HostEvent instance.
     *
     * @var string
     */
    const CREATE_CONNECTION = 'accompli.create_connection';

    /**
     * The DEPLOY_RELEASE event is dispatched when a Release is ready for deployment.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\DeployReleaseEvent instance.
     *
     * @var string
     **/
    const DEPLOY_RELEASE = 'accompli.deploy_release';

    /**
     * The DEPLOY_RELEASE_COMPLETE event is dispatched when a Release succesfully deployed.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\DeployReleaseCompleteEvent instance.
     *
     * @var string
     **/
    const DEPLOY_RELEASE_COMPLETE = 'accompli.deploy_release_complete';

    /**
     * The DEPLOY_RELEASE_FAILED event is dispatched when deployment of a Release has failed.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\DeployReleaseFailedEvent instance.
     *
     * @var string
     **/
    const DEPLOY_RELEASE_FAILED = 'accompli.deploy_release_failed';

    /**
     * The GATHER_FACTS event is dispatched when information from a host is required.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\GatherFactsEvent instance.
     *
     * @var string
     **/
    const GATHER_FACTS = 'accompli.gather_facts';

    /**
     * The INSTALL_RELEASE event is dispatched when a Release requires installation.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\InstallReleaseEvent instance.
     *
     * @var string
     **/
    const INSTALL_RELEASE = 'accompli.install_release';

    /**
     * The INSTALL_RELEASE_FAILED event is dispatched when installation of a Release has failed.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\FailedEvent instance.
     *
     * @var string
     **/
    const INSTALL_RELEASE_FAILED = 'accompli.install_release_failed';

    /**
     * The PREPARE_DEPLOY_RELEASE event is dispatched when a Release is prepared for deployment.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\PrepareDeployReleaseEvent instance.
     *
     * @var string
     **/
    const PREPARE_DEPLOY_RELEASE = 'accompli.prepare_deploy_release';

    /**
     * The PREPARE_RELEASE event is dispatched when a Release is being prepared.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\PrepareReleaseEvent instance.
     *
     * @var string
     **/
    const PREPARE_RELEASE = 'accompli.prepare_release';

    /**
     * The PREPARE_WORKSPACE event is dispatched when a server or local path is being prepared for deployments.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\PrepareWorkspaceEvent instance.
     *
     * @var string
     **/
    const PREPARE_WORKSPACE = 'accompli.prepare_workspace';

    /**
     * The ROLLBACK_RELEASE event is dispatched when a previous Release is being deployed.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\RollbackReleaseEvent instance.
     *
     * @var string
     **/
    const ROLLBACK_RELEASE = 'accompli.rollback_release';

    /**
     * The ROLLBACK_RELEASE_COMPLETE event is dispatched when a previous Release is successfully deployed.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\RollbackReleaseCompleteEvent instance.
     *
     * @var string
     **/
    const ROLLBACK_RELEASE_COMPLETE = 'accompli.rollback_release_complete';

    /**
     * The ROLLBACK_RELEASE_FAILED event is dispatched when deployment of a previous Release has failed.
     *
     * The event listener receives an
     * Accompli\EventDispatcher\Event\RollbackReleaseFailedEvent instance.
     *
     * @var string
     **/
    const ROLLBACK_RELEASE_FAILED = 'accompli.rollback_release_failed';

    /**
     * Returns an array with all the event names (constants).
     *
     * @return array
     **/
    public static function getEventNames()
    {
        return array(
            self::CREATE_CONNECTION,
            self::DEPLOY_RELEASE,
            self::DEPLOY_RELEASE_COMPLETE,
            self::DEPLOY_RELEASE_FAILED,
            self::GATHER_FACTS,
            self::INSTALL_RELEASE,
            self::INSTALL_RELEASE_FAILED,
            self::PREPARE_DEPLOY_RELEASE,
            self::PREPARE_RELEASE,
            self::PREPARE_WORKSPACE,
            self::ROLLBACK_RELEASE,
            self::ROLLBACK_RELEASE_COMPLETE,
            self::ROLLBACK_RELEASE_FAILED,
        );
    }
}

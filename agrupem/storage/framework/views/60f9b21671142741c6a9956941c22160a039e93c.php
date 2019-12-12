<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<h3>Calendario</h3>

<div id='calendar'></div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
        $('#calendar').fullCalendar({
            events : [
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                {
                    title : '<?php echo e($event->getLocalTitle()); ?>',
                    start : '<?php echo e($event->startDate); ?>',
                    end : '<?php echo e($event->endDate); ?>',
                    url : '<?php echo e(route('event.show', $event->id)); ?>'
                },
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        })
</script><?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/event/calendar.blade.php ENDPATH**/ ?>
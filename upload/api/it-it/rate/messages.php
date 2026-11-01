<?php
declare(strict_types=1);

return array (
  'has_assignments' => 'Rate card is assigned to a counterparty or progetto — unassign before archiving',
  'at_least_one_rate' => 'Provide at least one rate',
  'invalid_scope' => 'Invalid scope tipo',
  'scope_not_found' => 'The selected scope was not found',
  'date_range_required' => 'Provide a dati range (date_from and date_to)',
  'invalid_date_format' => 'Invalid dati format. Expected YYYY-MM-DD.',
  'date_from_after_to' => 'dati from must not be after dati to.',
  'range_too_large' => 'dati range must not exceed 366 days',
  'invalid_role' => 'The specified ruolo does not exist',
  'invalid_activity_code' => 'The specified work tipo is not in the dictionary',
  'negative_rate' => 'Rate cannot be negative',
  'invalid_date_range' => 'End dati cannot be earlier than start dati',
  'duplicate_line' => 'A line with the same employee, ruolo, and work tipo already exists in this rate card',
  'invalid_markup_percent' => 'Markup percent must be between 0 and 1000 or empty',
  'invalid_lag_days' => 'Lag days must be between 0 and 90',
  'invalid_auto_close_mode' => 'Invalid auto-chiudi mode',
  'preview_scope_required' => 'Provide a attività or a progetto/client scope to anteprima the rate',
);

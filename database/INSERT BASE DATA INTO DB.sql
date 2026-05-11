INSERT INTO tests ("testID", "taskID")
VALUES 
	(1, 1),
	(1, 2),
	(1, 3);

INSERT INTO test_answers (task, answer) VALUES
	((SELECT id FROM tests WHERE "testID" = 1 AND "taskID" = 1), 'int'),
	((SELECT id FROM tests WHERE "testID" = 1 AND "taskID" = 2), 'ооп - объектно ориентированное программирование'),
	((SELECT id FROM tests WHERE "testID" = 1 AND "taskID" = 3), 'начало и конец');


import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.time.temporal.ChronoUnit;
import java.util.Scanner;

/**
 * Created by George-Lenovo on 4/5/2017.
 */
public class ChangeToUppercase {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        String firstLine = in.nextLine();
        String secondLine = in.nextLine();

        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd-MM-yyyy");
        LocalDate firstDate = LocalDate.parse(firstLine, formatter);
        LocalDate secondDate = LocalDate.parse(secondLine, formatter);

        long days = ChronoUnit.DAYS.between(firstDate, secondDate);

        int daysCounter = 0;
        for (int i = 0; i <= days; i++) {
            boolean isWorkDay = checkIfHoliday(firstDate);

            if (!isWorkDay) {
                daysCounter++;
            }
            firstDate = firstDate.plusDays(1);
        }
        System.out.println(daysCounter);
    }

    private static boolean checkIfHoliday(LocalDate date) {
        if ((date.getDayOfMonth() == 1 && date.getMonth().getValue() == 1) ||
                (date.getDayOfMonth() == 3 && date.getMonth().getValue() == 3) ||
                (date.getDayOfMonth() == 1 && date.getMonth().getValue() == 5) ||
                (date.getDayOfMonth() == 6 && date.getMonth().getValue() == 5) ||
                (date.getDayOfMonth() == 24 && date.getMonth().getValue() == 5) ||
                (date.getDayOfMonth() == 6 && date.getMonth().getValue() == 9) ||
                (date.getDayOfMonth() == 22 && date.getMonth().getValue() == 9) ||
                (date.getDayOfMonth() == 1 && date.getMonth().getValue() == 11) ||
                (date.getDayOfMonth() == 24 && date.getMonth().getValue() == 12) ||
                (date.getDayOfMonth() == 25 && date.getMonth().getValue() == 12) ||
                (date.getDayOfMonth() == 26 && date.getMonth().getValue() == 12)
                ) {
            return true;
        } else if (
                (date.getDayOfWeek().getValue() == 6) ||
                        (date.getDayOfWeek().getValue() == 7)
                ) {
            return true;
        } else {
            return false;
        }

    }
}
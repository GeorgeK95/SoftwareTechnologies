import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.*;

/**
 * Created by George-Lenovo on 4/5/2017.
 */
public class CountWorkingDays {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        String firstInput = in.nextLine();
        String secondInput = in.nextLine();

        DateFormat sdf = new SimpleDateFormat("dd-MM-yyyy");
        try {
            Date startDate = sdf.parse(firstInput);
            Date endDate = sdf.parse(secondInput);
            int counter = 0;

            while (true) {
                //Date currentDate = new Date();

                if (startDate.equals(endDate)) {
                    break;
                }

                //Date date; // your date
                Calendar cal = Calendar.getInstance();
                cal.setTime(startDate);

                if (cal.DAY_OF_WEEK != Calendar.SATURDAY &&cal.DAY_OF_WEEK != Calendar.SUNDAY ){
                    counter++;
                }

                String dt = startDate.toString();  // Start date
                //SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd");
                Calendar c = Calendar.getInstance();
                c.setTime(sdf.parse(dt));
                c.add(Calendar.DATE, 1);  // number of days to add
                dt = sdf.format(c.getTime());

                startDate = sdf.parse(dt);
            }

            System.out.println(counter);
            /*int result = getWorkingDaysBetweenTwoDates(startDate, endDate);
            System.out.println(result + 1);*/
        } catch (ParseException e) {
            System.err.println("Error in date parsing.");
        }
    }

    public static int getWorkingDaysBetweenTwoDates(Date startDate, Date endDate) {
        Calendar startCal = Calendar.getInstance();
        startCal.setTime(startDate);

        Calendar endCal = Calendar.getInstance();
        endCal.setTime(endDate);

        int workDays = 0;

        //Return 0 if start and end are the same
        if (startCal.getTimeInMillis() == endCal.getTimeInMillis()) {
            return 0;
        }

        if (startCal.getTimeInMillis() > endCal.getTimeInMillis()) {
            startCal.setTime(endDate);
            endCal.setTime(startDate);
        }
        DateFormat sdf = new SimpleDateFormat("dd-MM-yyyy");

        List<Date> holidays = new ArrayList<Date>();
        try {
            holidays.add(sdf.parse("01-01-2000"));
            holidays.add(sdf.parse("03-03-2000"));
            holidays.add(sdf.parse("01-05-2000"));
            holidays.add(sdf.parse("06-05-2000"));
            holidays.add(sdf.parse("24-05-2000"));
            holidays.add(sdf.parse("06-09-2000"));
            holidays.add(sdf.parse("22-09-2000"));
            holidays.add(sdf.parse("01-11-2000"));
            holidays.add(sdf.parse("24-12-2000"));
            holidays.add(sdf.parse("25-12-2000"));
            holidays.add(sdf.parse("26-12-2000"));
        } catch (ParseException e) {
            e.printStackTrace();
        }
        do {
            //excluding start date
            startCal.add(Calendar.DAY_OF_MONTH, 1);
            if (startCal.get(Calendar.DAY_OF_WEEK) != Calendar.SATURDAY && startCal.get(Calendar.DAY_OF_WEEK) != Calendar.SUNDAY) {
                //if (!holidays.contains(startCal.get(Calendar.)))
                boolean check = false;
                for (Date current : holidays) {
                    if (current.equals(startCal)) {
                        check = true;
                    }
                }

                if (!check) {
                    ++workDays;
                }
            }
        } while (startCal.getTimeInMillis() < endCal.getTimeInMillis()); //excluding end date

        return workDays;
    }
}
